<?php 

$host="localhost";
$name="root";
$pass="";
$db="contactform";

$con=mysqli_connect($host,$name,$pass,$db);

if ($con->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
//echo "Connected successfully";

if (isset($_POST['submit'])) {

	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
	$message=mysqli_real_escape_string($con,$_POST['message']);

$sql = "INSERT INTO contactus (username, email, subject, message)
VALUES ('$username', '$email', '$subject','$message')";

if (mysqli_query($con, $sql)) {

	echo "<script> alert('created successfully') </script>";
	header("Refresh:1; url=contact.php");

	//header("location: ../contact.php?contact=success");
	//exit();
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

}
 ?>