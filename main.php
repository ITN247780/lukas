

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN MENUE</title>
</head>
<body>
    <a href="main.php?site=signup">SignUp</a>
    <a href="main.php?site=login">Login</a>
<?php
if(!empty($_GET['site'])){
    if($_GET['site'] == "login"){ 
        include('login.php');
    }
    else{  
        include('signup.php');
    }
}
    ?>
</body>
</html>