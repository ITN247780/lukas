<?php

include("class.db.php");


class User extends Connection
{
    public function signup($uname, $email, $pw)
    {
        $stmt = $this->connect()->prepare("INSERT INTO users (Username, Email, Passwort) VALUES (?, ?, ?)");
        $stmt->execute([$uname, $email, $pw]);
        return true;
    }


    public function login($username, $pw)
    {


        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE Username = ? AND Passwort = ?");
        $stmt->execute([$username, $pw]);
        $stmt->fetch();
        if($stmt->rowCount() == 1){
            return true;
        }
        else{
            return false;
        }
    }
}
