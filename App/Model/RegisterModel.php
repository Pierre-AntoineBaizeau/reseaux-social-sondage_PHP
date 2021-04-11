<?php

namespace App\Model;

use Core\Database;

class RegisterModel extends Database
{
    public function register($username, $email, $password)
    {
        $datas = array(
            "username" => $username,
            "email" => $email,
            "password" => hash("sha256", $password)
        );
        $this->prepare("INSERT INTO `users` (`username`, `email`, `password`) VALUES (:username, :email, :password)", $datas);
        header('Location: ./?page=login');
    }
}
