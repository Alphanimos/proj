<?php 
include 'loginconnect.php';

if(isset($_POST['signUp'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkUsername="SELECT * From users where username='$username'";
     $result=$conn->query($checkUsername);
     if($result->num_rows>0){
        echo "Username Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(username, password)
                       VALUES ('$username','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
}

if(isset($_POST['signIn'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE username='$username'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
       $user = $result->fetch_assoc();
       if ($user['password'] === $password) {
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit();
       } else {
           // Redirect back to login page with an error parameter for incorrect password
           header("Location: login.php?error=invalid_password");
           exit();
       }
   }
   else{
    // Redirect back to login page with an error parameter for incorrect username
    header("Location: login.php?error=invalid_username");
    exit();
   }
}
?>