<?php include('header.php'); ?>
<?php
// database connection code

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$first_character = mb_substr($_POST['regId'], 0, 1);



if($first_character=="A")
{

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','rotarycl_reg-form');

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
$sql = "INSERT INTO `tbl_contact_a` (`Id`,`RegistrationNo`, `Name`, `Email`,`Dob`, `Phone`, `Address`,`SchoolName`,`Age`,`AgeGroup`) VALUES ('0','$regId', '$txtName', '$txtEmail','$txtDob','$txtPhone', '$txtAddress', '$txtSchoolName','$txtAge','$txtAgeGroup')";

// insert in database 
$rs = mysqli_query($con, $sql);

$first_character = mb_substr($_POST['regId'], 0, 1);


 //for sending email


require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();



// Settings
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.gmail.com";    // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "anupamwelkin@gmail.com";            // SMTP account username example
$mail->Password   = "fcsmfyozriosyfuk";            // SMTP account password example

// Content
$mail->isHTML(true);                       // Set email format to HTML
$mail->AddAddress($txtEmail, $txtName);
$mail->SetFrom("anupamwelkin@gmail.com", "Anupam Singh");
$mail->Subject = 'New Registration';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$content = "<b>Thankyou for registering with us for painting competition. This is your registration id - " . $regId . " </b>";

$mail->send();

$mail->MsgHTML($content); 

if(!$mail->Send()) {
  echo "Error while sending Email.";
  //var_dump($mail);
} else {
  echo "<div class='container'><div class='py-5 text-center'><h2>A confirmation email has been sent to your registered mail id.</h2></div></div>";
}


//$to = $txtEmail;

//$subject = "New Registration";

//$txt ="Registration ID = ". $regId . "\r\n Name = ". $txtName . "\r\n Phone = //" . $txtPhone . "\r\n  Email = " . $txtEmail . "\r\n Age =" . $txtAge;

//$headers = "From: " . $txtEmail. "\r\n" .

//"CC: nitin.gupta@welkinring.com";

//if($txtEmail!=NULL){

//    mail($to,$subject,$txt,$headers);

//}

//redirect

//header("Location:thankyou.html");

if($rs)
{
	// echo "Contact Records Inserted";
	echo '<br><div class="container" style="background-color:#eeeeee;font-size:20px;padding:20px;"><div class="row">';
//	echo mb_substr($_POST['regId'], 0, 1);
	echo '<div class="col-md-12" style="text-align:center;font-weight:500;">Hello ' . $_POST["txtName"] . ',<br>Thankyou for submitting the painting competition form.<br>This is your registration no. <big><b>' . $_POST ["regId"] .'</b></big></div>';
	echo '<div class="col-md-12" style="text-align:center"><p>&nbsp;</p><button class="btn-primary" onclick="window.print()">Print</button></div>';
	echo '</div></div>';
 ?>
	
    
    <?php
    
    
   
}
}

else if($first_character=="B")
{

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','rotarycl_reg-form');

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
$sql = "INSERT INTO `tbl_contact_b` (`Id`,`RegistrationNo`, `Name`, `Email`,`Dob`, `Phone`, `Address`,`SchoolName`,`Age`,`AgeGroup`) VALUES ('0','$regId', '$txtName', '$txtEmail','$txtDob','$txtPhone', '$txtAddress', '$txtSchoolName','$txtAge','$txtAgeGroup')";

// insert in database 
$rs = mysqli_query($con, $sql);

$first_character = mb_substr($_POST['regId'], 0, 1);


 //for sending email


require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();



// Settings
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.gmail.com";    // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "anupamwelkin@gmail.com";            // SMTP account username example
$mail->Password   = "fcsmfyozriosyfuk";            // SMTP account password example

// Content
$mail->isHTML(true);                       // Set email format to HTML
$mail->AddAddress($txtEmail, $txtName);
$mail->SetFrom("anupamwelkin@gmail.com", "Anupam Singh");
$mail->Subject = 'New Registration';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$content = "<b>Thankyou for registering with us for painting competition. This is your registration id - " . $regId . " </b>";

$mail->send();

$mail->MsgHTML($content); 

if(!$mail->Send()) {
  echo "Error while sending Email.";
  //var_dump($mail);
} else {
  echo "<div class='container'><div class='py-5 text-center'><h2>A confirmation email has been sent to your registered mail id.</h2></div></div>";
}


//$to = $txtEmail;

//$subject = "New Registration";

//$txt ="Registration ID = ". $regId . "\r\n Name = ". $txtName . "\r\n Phone = //" . $txtPhone . "\r\n  Email = " . $txtEmail . "\r\n Age =" . $txtAge;

//$headers = "From: " . $txtEmail. "\r\n" .

//"CC: nitin.gupta@welkinring.com";

//if($txtEmail!=NULL){

//    mail($to,$subject,$txt,$headers);

//}

//redirect

//header("Location:thankyou.html");

if($rs)
{
	// echo "Contact Records Inserted";
	echo '<br><div class="container" style="background-color:#eeeeee;font-size:20px;padding:20px;"><div class="row">';
//	echo mb_substr($_POST['regId'], 0, 1);
	echo '<div class="col-md-12" style="text-align:center;font-weight:500;">Hello ' . $_POST["txtName"] . ',<br>Thankyou for submitting the painting competition form.<br>This is your registration no. <big><b>' . $_POST ["regId"] .'</b></big></div>';
	echo '<div class="col-md-12" style="text-align:center"><p>&nbsp;</p><button class="btn-primary" onclick="window.print()">Print</button></div>';
	echo '</div></div>';
 ?>
	
     
    <?php
    
    
   
}
}




else if($first_character=="C")
{

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','rotarycl_reg-form');

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
$sql = "INSERT INTO `tbl_contact_c` (`Id`,`RegistrationNo`, `Name`, `Email`,`Dob`, `Phone`, `Address`,`SchoolName`,`Age`,`AgeGroup`) VALUES ('0','$regId', '$txtName', '$txtEmail','$txtDob','$txtPhone', '$txtAddress', '$txtSchoolName','$txtAge','$txtAgeGroup')";

// insert in database 
$rs = mysqli_query($con, $sql);

$first_character = mb_substr($_POST['regId'], 0, 1);


 //for sending email


require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();



// Settings
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.gmail.com";    // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "anupamwelkin@gmail.com";            // SMTP account username example
$mail->Password   = "fcsmfyozriosyfuk";            // SMTP account password example

// Content
$mail->isHTML(true);                       // Set email format to HTML
$mail->AddAddress($txtEmail, $txtName);
$mail->SetFrom("anupamwelkin@gmail.com", "Anupam Singh");
$mail->Subject = 'New Registration';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$content = "<b>Thankyou for registering with us for painting competition. This is your registration id - " . $regId . " </b>";

$mail->send();

$mail->MsgHTML($content); 

if(!$mail->Send()) {
  echo "Error while sending Email.";
  //var_dump($mail);
} else {
  echo "<div class='container'><div class='py-5 text-center'><h2>A confirmation email has been sent to your registered mail id.</h2></div></div>";
}


//$to = $txtEmail;

//$subject = "New Registration";

//$txt ="Registration ID = ". $regId . "\r\n Name = ". $txtName . "\r\n Phone = //" . $txtPhone . "\r\n  Email = " . $txtEmail . "\r\n Age =" . $txtAge;

//$headers = "From: " . $txtEmail. "\r\n" .

//"CC: nitin.gupta@welkinring.com";

//if($txtEmail!=NULL){

//    mail($to,$subject,$txt,$headers);

//}

//redirect

//header("Location:thankyou.html");

if($rs)
{
	// echo "Contact Records Inserted";
	echo '<br><div class="container" style="background-color:#eeeeee;font-size:20px;padding:20px;"><div class="row">';
//	echo mb_substr($_POST['regId'], 0, 1);
	echo '<div class="col-md-12" style="text-align:center;font-weight:500;">Hello ' . $_POST["txtName"] . ',<br>Thankyou for submitting the painting competition form.<br>This is your registration no. <big><b>' . $_POST ["regId"] .'</b></big></div>';
	echo '<div class="col-md-12" style="text-align:center"><p>&nbsp;</p><button class="btn-primary" onclick="window.print()">Print</button></div>';
	echo '</div></div>';
 ?>
	
     
    <?php
    
    
   
}
}




else if($first_character=="D")
{

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','rotarycl_reg-form');

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
$sql = "INSERT INTO `tbl_contact_d` (`Id`,`RegistrationNo`, `Name`, `Email`,`Dob`, `Phone`, `Address`,`SchoolName`,`Age`,`AgeGroup`) VALUES ('0','$regId', '$txtName', '$txtEmail','$txtDob','$txtPhone', '$txtAddress', '$txtSchoolName','$txtAge','$txtAgeGroup')";

// insert in database 
$rs = mysqli_query($con, $sql);

$first_character = mb_substr($_POST['regId'], 0, 1);


 //for sending email


require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();



// Settings
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.gmail.com";    // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "anupamwelkin@gmail.com";            // SMTP account username example
$mail->Password   = "fcsmfyozriosyfuk";            // SMTP account password example

// Content
$mail->isHTML(true);                       // Set email format to HTML
$mail->AddAddress($txtEmail, $txtName);
$mail->SetFrom("rotaryposterpainting@gmail.com", "Rotary Club Delhi South West");
$mail->Subject = 'Registration Confirmation for 21st Rotary Poster Painting Competition';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$content = "<center><br><br><b>Thankyou " . $txtName . "  for registering with us for painting competition. This is your registration id - " . $regId . " </b></center><p>&nbsp;</p><p>&nbsp;</p>";

$mail->send();

$mail->MsgHTML($content); 

if(!$mail->Send()) {
  echo "Error while sending Email.";
  //var_dump($mail);
} else {
  echo "<div class='container'><div class='py-5 text-center'><h2>A confirmation email has been sent to your registered mail id.</h2></div></div>";
}


//$to = $txtEmail;

//$subject = "New Registration";

//$txt ="Registration ID = ". $regId . "\r\n Name = ". $txtName . "\r\n Phone = //" . $txtPhone . "\r\n  Email = " . $txtEmail . "\r\n Age =" . $txtAge;

//$headers = "From: " . $txtEmail. "\r\n" .

//"CC: nitin.gupta@welkinring.com";

//if($txtEmail!=NULL){

//    mail($to,$subject,$txt,$headers);

//}

//redirect

//header("Location:thankyou.html");

if($rs)
{
	// echo "Contact Records Inserted";
	echo '<br><div class="container" style="background-color:#eeeeee;font-size:20px;padding:20px;"><div class="row">';
//	echo mb_substr($_POST['regId'], 0, 1);
	echo '<div class="col-md-12" style="text-align:center;font-weight:500;">Hello ' . $_POST["txtName"] . ',<br>Thankyou for registering with us for painting competition.<br>This is your registration id. <big><b>' . $_POST ["regId"] .'</b></big></div>';
	echo '<div class="col-md-12" style="text-align:center"><p>&nbsp;</p><button class="btn-primary" onclick="window.print()">Print</button></div>';
	echo '</div></div>';
 ?>
	
     
    <?php
    
    
   
}
}


else
{
	echo "Are you a genuine visitor?";
	
}
?>
<p>&nbsp;</p>
<?php include('footer.php'); ?>