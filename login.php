<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		
		$result = mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
if (mysqli_num_rows($result) === 1) {

     // Register $myusername, $mypassword and redirect to file "login_success.php"
     $role = mysqli_fetch_array($result);


      if($role['role'] == "admin"){
        header("location:a.php");
            exit();
            }
      elseif($role['role'] == "user"){
  header("location:user.php");
        exit();
     }
      
     
     
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}