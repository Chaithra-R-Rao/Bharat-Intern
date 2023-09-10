const APP_ID = "eb010d0bd2e240bdb7782ed113ffb61c"
const TOKEN = "007eJxTYAjUztTd47Xndqib54Rdfkca84M/1W0pZLBbmeQ4SzeVYYMCQ2qSgaFBikFSilGqkQmQSjI3tzBKTTE0NE5LSzIzTN799m9KQyAjw7qW+wyMUAjiszDkJmbmMTAAAB4iIA4="
//particular token valid for max 24 hours
const CHANNEL = "main"

const client = AgoraRTC.createClient({ mode: 'rtc', codec: 'vp8' })

let camera_btn = document.querySelector('.btn-camera')
let mic_btn = document.querySelector('.btn-mic')


let localTracks = []      //store current users audio and video track in a list
let remoteUsers = {}      //remote users    ---object

let joinAndDisplayLocalStream = async () => {

    client.on('user-published', handleUserJoined)
    client.on('user-left', handleUserLeft)

    let UID = await client.join(APP_ID, CHANNEL, TOKEN, null)       //join method   ,if uid not specified then it will be generated
    localTracks = await AgoraRTC.createMicrophoneAndCameraTracks() //local users to access their camera and mic

    //display and store stream
    let player = `<div class="video-container" id="user-container-${UID}">
                     <div class="video-player" id="user-${UID}"></div>
                  </div>`
    document.getElementById('video-streams').insertAdjacentHTML('beforeend', player)
    localTracks[1].play(`user-${UID}`)       //hold audio tracks -index 0 & video tracks index -1

    await client.publish([localTracks[0], localTracks[1]])    //publishing audio and video
}

//Function to call previous method and respond to join function
let joinStream = async () => {
    await joinAndDisplayLocalStream()
    document.getElementById('join').style.display = 'none'
    document.getElementById('title').style.display = 'none'

    document.getElementById('stream-controls').style.display = 'flex'
}

//new user joined
let handleUserJoined = async (user, mediaType) => {

    remoteUsers[user.uid] = user    //adding to remote user object
    await client.subscribe(user, mediaType)

    if (mediaType === 'video') {
        let player = document.getElementById(`user-container-${user.uid}`)

        if (player != null) {
            player.remove()  //if user already has a video player remove it --> no duplicate inside browser
        }

        //store remote user's video track
        player = `<div class="video-container" id="user-container-${user.uid}">
                   <div class="video-player" id="user-${user.uid}"></div>       
                 </div>`

        document.getElementById('video-streams').insertAdjacentHTML('beforeend', player)

        user.videoTrack.play(`user-${user.uid}`)

    }

    if (mediaType === 'audio') {
        user.audioTrack.play()

    }
}

let handleUserLeft = async (user) => {
    delete remoteUsers[user.id]
    document.getElementById(`user-container-${user.uid}`).remove()
}

let leaveAndRemoveLocalStream = async () => {
    for (let i = 0; localTracks.length > i; i++) {
        localTracks[i].stop()
        localTracks[i].close()
    }

    //disconnects client from the channel
    await client.leave()
    document.getElementById('title').style.display = 'block'

    document.getElementById('join').style.display = 'block'
    document.getElementById('stream-controls').style.display = 'none'
    document.getElementById('video-streams').innerHTML = ''

}

//toggle mic - to on or off

let toggleMic = async (e) => {
    if (localTracks[0].muted) {
        await localTracks[0].setMuted(false);

        mic_btn.innerHTML = ' <i class="bi bi-mic"></i>';
        mic_btn.style.backgroundColor = 'cadetblue';
    }
    else {
        await localTracks[0].setMuted(true);
        mic_btn.innerHTML = ' <i class="bi bi-mic-mute"></i>';
        mic_btn.style.backgroundColor = '#ee4b2b';
    }
};

let toggleCamera = async (e) => {
    if (localTracks[1].muted) {
        await localTracks[1].setMuted(false);
        camera_btn.innerHTML = ' <i class="bi bi-camera-video"></i>';
        camera_btn.style.backgroundColor = 'cadetblue';
    }
    else {
        await localTracks[1].setMuted(true);
        camera_btn.innerHTML = ' <i class="bi bi-camera-video-off"></i>';
        camera_btn.style.backgroundColor = '#ee4b2b';
    }
};

document.getElementById('join').addEventListener('click', joinStream)
document.getElementById('leave-btn').addEventListener('click', leaveAndRemoveLocalStream)

document.getElementById('mic-btn').addEventListener('click', toggleMic);
document.getElementById('camera-btn').addEventListener('click', toggleCamera);
