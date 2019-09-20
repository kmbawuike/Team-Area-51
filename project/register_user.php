<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $email=$password="";
    //validate email
    if (empty($_POST["email"])) {
        $ema = 'Email required';
    }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $ema = 'Enter a valid email';
    }else{
        $email = test_values($_POST["email"]);  
    }

    //validate password
    if(empty($_POST["password"])){        
        $pass = 'Please enter a password';
            }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$_POST["password"])){                
        $pass = 'Password must be in alphanumeric.';
    }elseif(strlen($_POST["password"])< 6){
        $pass = 'Password must be at least six characters.';
    }else {
        $password = test_values($_POST["password"]);  
    }

        $passw2 = test_values($_POST["pass"]);
    
    // validating passwords

     if( $password !== $passw2) {

    $err="<b>Invalid operation... Wrong password confirmation supplied!</b>";
    
    }else{
        $password = password_hash(test_values($_POST["password"]),PASSWORD_DEFAULT);
    }




  if(empty($ema) && empty($pass) && empty($err)){  

    $result = mysqli_query($conn, "SELECT * FROM register where email='$email'");

    if (mysqli_num_rows($result) == 0) {
    
        //create account
        mysqli_query($conn, "insert into register set email='$email', password='$password'") or die(mysql_error($conn));
        
        $_SESSION['sms']= "<font color=green><b>Your registration was successful! </b></font>";
        header("location:index.php");

        $email=$password="";
        }
        
        else {
        $err="<font color=red><b>Email already exist!</b></font>";
        
        }
   
        
    }
    

} 
    







function test_values($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = empty($data);
    return $data;
}


?>