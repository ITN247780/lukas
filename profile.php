<?php

session_start();


if (!$_SESSION['username']) {
  die('Keinen Zugriff, bitzte logge dich ein!');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prof</title>
</head>
<body>
  

<form action="profile.php" method="POST">

<button type="submit" name="logoutbtn">Logout</button>

</form>

<?php


if (isset($_POST['logoutbtn'])) {
  session_destroy();
  print '<h3> Sie wurden Erfolgreich Ausgeloggt !</h3>';
  header("Refresh: 3, url=main.php");
}



?>











<h1>Profile</h1>

</body>
</html>