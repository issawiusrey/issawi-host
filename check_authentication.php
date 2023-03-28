<?php 
session_start(); 
//Database Configuration File
include('connectdb.php');?>
<?php
// check if user coming from HTTP request
if(isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
  $email = trim($_POST['email']);
  $user_status =1;
  $password = trim($_POST['password']);
  if($email != "" && $password != "") {
    try {
      $query = "select * from `users_administrator` where `email`=:email and `password`=:password and `user_status`=:user_status" ;
      $stmt = $db->prepare($query);
      $stmt->bindParam('email', $email, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->bindValue('user_status', $user_status, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['sess_user_id']   = $row['id'];
        $_SESSION['sess_name'] = $row['name'];
        $_SESSION['sess_privacy'] = $row['privacy'];
        $_SESSION['sess_image'] = $row['attachments'];
		if( $_SESSION['sess_privacy'] =="admin"){
			 echo "system/index.php";
		}elseif ( $_SESSION['sess_privacy'] =="member") {
           echo "user/index.php";
        } 
      
      } else {
        echo "invalid";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    echo "Both fields are required!";
  }
} else {
  header('location:login.php');
}
?>