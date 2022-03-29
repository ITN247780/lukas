<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    
<form method="POST" action="">

<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="pw" placeholder="Passwort" required>
<input type="password" name="pw2" placeholder="Passwort bestättigen" required>
<button type="submit" name="regbtn">Sign Up </button>

<!--<input type="range" name="uname" min="1" max="100" oninput="heightvalue.value = this.value;" required>  //regler mit ausgabe von 1 bis 100.
<output id="heightvalue"></output> -->

</form>


<?php


 if(isset($_POST['regbtn'])){
     $uname = $_POST['username'];
     $email = $_POST['email'];
     $pw = sha1($_POST['pw']);
     $pw2 = sha1( $_POST['pw2']);

 try {   
     
    if($pw === $pw2){
    include('classes/class.user.php');
    $user = new User();
    $check = $user->signup($uname, $email, $pw);
    if($check){
        echo "<script>alert('Registration Successful');</script>";
        header("Refresh:3;url=login.php");
    }

    else {
        echo "<script>alert('Registrierung nicht erfolgreich');</script>";
    } 

} 
  



 else {
     //echo 'Passwörter stimmen nicht überein!';
     echo "<script>alert('Passwörter sind nicht identisch!! Bitte versuchen Sie es nochmal zu Registrieren!!');</script>";
}



}

 catch( PDOException $Exception ) {
    // Note The Typecast To An Integer!
  if((int)$Exception->getCode()) 
       // print 'Benutzer oder Email bereits vergeben'; //eingabe
        echo "<script>alert('Benutzer oder Email bereits vergeben');</script>";

   }

 }
?>





</body>
</html>