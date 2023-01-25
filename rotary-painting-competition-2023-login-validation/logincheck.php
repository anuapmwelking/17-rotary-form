<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "connected";
}else{
    echo "error in connection";
}
$db = mysqli_select_db($con, 'rotarycl_reg-form');
if(isset($_POST['submit'])){
    $username = $_POST['userName'];
    $userpassword = $_POST['userPassword'];

    $sql = "select * FROM admintable where user='$username' and pass='$userpassword'";

    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row ==1){
            echo "Login Successful";
            $_SESSION['user'] = $username;
            // header('location:adminloginpage.php');
            header('location:result_a.php');
        }else {
            echo "login failed";
            header('location:logout.php');
        
    }

}

?>