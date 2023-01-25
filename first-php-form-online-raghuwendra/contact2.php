<?php
// database connection code
if(isset($_POST['regId']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','form-data');

// get the post records
$regId = $_POST['regId'];
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtDob = $_POST['txtDob'];
$txtPhone = $_POST['txtPhone'];
$txtAddress = $_POST['txtAddress'];
$txtSchoolName = $_POST['txtSchoolName'];
$txtAge = $_POST['txtAge'];
$txtAgeGroup = $_POST['txtAgeGroup'];
// $txtMessage = $_POST['txtMessage'];
// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`,`RegistrationNo`, `Name`, `Email`,`Dob`, `Phone`, `Address`,`SchoolName`,`Age`,`AgeGroup`) VALUES ('0','$regId', '$txtName', '$txtEmail','$txtDob','$txtPhone', '$txtAddress', '$txtSchoolName','$txtAge','$txtAgeGroup')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	// echo "Contact Records Inserted";
	echo '<div>';
	echo '<p>Registration No: ' . $_POST ["regId"] .'<p/>';
	echo '<p>Name: ' . $_POST ["txtName"] . '<p/>';
	echo 'Email: ' . $_POST ["txtEmail"] . '<p/>';
	echo 'DOB: ' . $_POST ["txtDob"] . '<p/>';
	echo 'Phone No: ' . $_POST ["txtPhone"].'<p/>';
	echo 'Address: ' . $_POST ["txtAddress"].'<p/>';
	echo 'School Name: ' . $_POST ["txtSchoolName"].'<p/>';
	echo 'Age: ' . $_POST ["txtAge"].'<p/>';
	echo 'Age Group: ' . $_POST ["txtAgeGroup"].'<p/>';
	echo '</div>';
	// echo `$txtId`
	// echo '<script>sessionStorage.clear();'.'</script>'
	// exit()
	// echo "<script>window.close();</script>";
	// header("Location: contact/reg-form.html");
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
