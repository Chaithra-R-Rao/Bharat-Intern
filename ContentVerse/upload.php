<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php

if (!isset($_SESSION['usrId'])) {
    //echo "403 Forbidden Access";
    header("location: ../login.php");
    exit();
}
?>

<?php

if (isset($_POST['upload']) && isset($_FILES['topic_image'])) {
    require 'includes/dbh.inc.php';

    $pid = $_SESSION['usrId'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $para3 = $_POST['para3'];

    echo "<pre>";
    print_r($_FILES['topic_image']);
    echo "</pre>";

    $img_name = $_FILES['topic_image']['name'];
    $img_size = $_FILES['topic_image']['size'];
    $tmp_name = $_FILES['topic_image']['tmp_name'];
    $error = $_FILES['topic_image']['error'];

    if ($error === 0) {

        if ($img_size > 750000) {
            $em = "Sorry, your file is too large.";
            header("Location: addcontent.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                //Inserting into database
                $sql = "INSERT INTO `content`(pid, title, description,image_url,paragraph1,paragraph2,paragraph3) 
          VALUES (?,?,?,?,?,?,?) ";

                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: addcontent.php?error=sqlerror");
                } else {
                    mysqli_stmt_bind_param($stmt, "sssssss", $pid, $title, $description, $new_img_name, $para1, $para2, $para3);
                    mysqli_stmt_execute($stmt);
                    header("location: addcontent.php?upload=success");
                    exit();
                }
            } else {
                $em = "You can't upload files of this type";
                header("Location: addcontent.php?error=$em");
            }
        }
    } else {
        $em = "Unknown error occured";
        header("Location: addcontent.php?error=$em");
    }
} else {
    $em = "Unknown error occured";
    header("Location:addcontent.php?error=$em");
}
?>



