<?php

// if(isset($_POST['register'])){
	if(isset($_POST['send'])){


	
	require 'dbh.inc.php';

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	$sql = "INSERT INTO messages (name,email,phone,message) VALUES (?,?,?,?)";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("location: ../contact.php?error=sqlerror");
				
		}
		else {
			mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$phone,$message);
			mysqli_stmt_execute($stmt);
			header("location: ../contact.php?send=success");
			exit();
		}
}
	// $password_2=$_POST['password2'];

/*if(empty($name)||empty($usn)||empty($email)||empty($phone)||empty($password_1)||empty($password_2)||empty($college)||empty($gender) )
{
	header("location: ../registration.php?error=emptyfields&name=".$name."&usn=".$usn."&email=".$email."&phone=".$phone."&college_select=".$college."&genderSelect=".$gender);
	exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	header("location: ../registration.php?error=invalidemail&name=".$name."&usn=".$usn."&phone=".$phone."&college_select=".$college."&genderSelect=".$gender);
	exit();
}
elseif (!preg) {
	// code...
}*/


/*if($password_1 !== $password_2){
		header("location: ../registration.php?error=passwordMismatch&name=".$name."&email=".$email."&phone=".$phone);
	
		exit();
}

$sql = "SELECT email FROM users WHERE email=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../registration.php?error=sqlerror");
}
else {
	mysqli_stmt_bind_param($stmt, "s",$email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$resultCheck = mysqli_stmt_num_rows($stmt);
	if ($resultCheck>0) {
			header("location: ../registration.php?error=emailtaken&name=".$name."&phone=".$phone);
			
			exit();
	}

	else {
		$sql = "INSERT INTO users (name,email,password,phone) VALUES (?,?,?,?)";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("location: ../registration.php?error=sqlerror");
				
		}
		else {
			mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$password_1,$phone);
			mysqli_stmt_execute($stmt);
			header("location: ../login.php?signup=success");
			exit();
		}
	}


}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else {
	header("location: ../registration.php");
}


*/















































 ?>
