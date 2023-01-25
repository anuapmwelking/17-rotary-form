<?php

session_start();
if(!isset($_SESSION['user'])){
    header('location:adminlogin.php');
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rotarycl_reg-form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  RegistrationNo,Name,Email,Dob,Phone,Address,SchoolName,Age,AgeGroup,DateCreated  FROM tbl_contact_d";
$result = mysqli_query($conn, $sql);

?>


<?php include "header.php"; ?>
<a href="logout.php"><button class="btn-danger " style="float: right;
    margin-right: 37px;
    padding: 8px;
    border-radius: 4px;" >Logout</button></a>
<br>
<br>
<div style="text-align:center">


</div>
<br>
<br>
<div class="container">
<div class="dropdown">
<button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
13+ to 17
</button>
<button class="btn-primary " style="padding: 6px 9px;
    border-radius: 5px;float: right" onclick="window.print()">Print</button>

<ul class="dropdown-menu">
<li><a class="dropdown-item" href="result_a.php">3+ to 6</a></li>
<li><a class="dropdown-item" href="result_b.php">6+ to 9</a></li>
<li><a class="dropdown-item" href="result_c.php">9+ to 13</a></li>
<li><a class="dropdown-item" href="result_d.php">13+ to 17</a></li>
</ul>
</div>
  <h2 style="text-align:center">Age Group : 13+ to 17</h2>
  <br>
<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Registration No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">DOB</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">School Name</th>
      <th scope="col">Age</th>
      <th scope="col">Age Group</th>
      <th scope="col">Date Created</th>
    </tr>
  </thead>
  <tbody>
<?php
// if(isset)
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // $resultId = $row["id"];
    $resultRegistrationNo = $row["RegistrationNo"];
    $resultName = $row["Name"];
    $resultEmail = $row["Email"];
    $resultDob = $row["Dob"];
    $resultPhone = $row["Phone"];
    $resultAddress = $row["Address"];
    $resultSchoolName = $row["SchoolName"];
    $resultAge = $row["Age"];
    $resultAgeGroup = $row["AgeGroup"];
    $resultDateCreated = $row["DateCreated"];

    ?>

    <tr>
      <!-- <th scope="row"><?php echo $resultId ?></th> -->
      <th scope="row"><?php echo $resultRegistrationNo ?></th>
      <td><?php echo $resultName ?></td>
      <td><?php echo $resultEmail ?></td>
      <td><?php echo $resultDob ?></td>
      <td><?php echo $resultPhone ?></td>
      <td><?php echo $resultAddress ?></td>
      <td><?php echo $resultSchoolName ?></td>
      <td><?php echo $resultAge ?></td>
      <td><?php echo $resultAgeGroup ?></td>
      <td><?php echo $resultDateCreated ?></td>
   
    </tr>
   
<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</tbody>
</thead>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
