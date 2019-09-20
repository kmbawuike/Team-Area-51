<?php

$ema=$email='';
$pass='';


if ($_SERVER["REQUEST_METHOD"] =="POST") {

    if (empty(test_values($_POST["email"]))) {
        $ema = ' Email is required';
    }
    elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $ema = 'Enter a valid email';
    }
    else{
        $em = $conn->real_escape_string(test_values($_POST['email']));			
    }



   if (empty(test_values($_POST['password']))) {
    $pass = 'Password is required';
      }
 elseif(!preg_match("/^[a-zA-Z0-9]*$/",$_POST["password"])){                
    $pass = 'Password must be in alphanumeric.';
}

 elseif(strlen($_POST["password"])< 6){
    $pass = 'Password must be at least six characters.';
}

else{
    $passw=$conn->real_escape_string(test_values($_POST['password']));
}

if (empty($ema) && empty($pass)) {
    $sql = $conn->query("SELECT * FROM register WHERE email='$em' ");

        if($sql->num_rows==1){
                $row = $sql->fetch_assoc();                         
                 //verify user password with hashed password
                 if (password_verify ($passw, $row['password'])) {								
                    //  $_SESSION['login']=true;
                    header("location: success.php");

                 }else{
                    $err = 'Password does not match';
                 }
                 
             
}
else{
    $err = 'Email does not exist!!';
    
}
}
}









//function to test input
function test_values($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>