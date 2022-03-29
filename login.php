<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<form method="POST" action="">

<input type="text" name="username" placeholder="Username" required>
<input type="password" name="pw" placeholder="Passwort">

<button type="submit" name="logbtn">Login</button>


</form>


<?php


include('classes/class.user.php');

if(isset($_POST['logbtn'])){

    $uname = $_POST['username'];
    $pw = sha1($_POST['pw']);
    
    session_start();
    $_SESSION['username'] = $_POST['username'];
    if($_SESSION['username']){

    
    $user = new User();
    $check = $user->login($uname, $pw);
    if($check){
        echo "<script>alert('Login Successful');</script>";
        header("Refresh:3;url=profile.php");
        echo "Sie werden in kürze weitergeleitet";
    }

    else {
        echo "<script>alert('Benutzername oder Passwort falsch! Bitte Versuchen Sie es nochmal');</script>";
    } 

} 




}

?>








</body>
</html>