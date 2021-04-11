<?php

namespace App\Model;

use Core\Database;

class ProfilModel extends Database
{
    public function getMyInfos()
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode([]);
            return [];
        }

        $datas = array(
            "myId" => $_SESSION['id'],
                  
        );
        $req = $this->query("SELECT id, email, username, firstName, lastName, birthDate FROM `users` WHERE id = :myId", $datas, true);
        echo json_encode($req);
        return $req;
        
        
        
    }

    public function updateMyInfos($username, $email, $firstName, $lastName, $birthDate, $password)
    {   
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode([]);
            return [];
        }

        $datas = array(
            "myId" => $_SESSION['id'],
            'email' => $email,
            'username' => $username,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthDate,
            'password' => hash("sha256", $password),
        );

        $req = $this->prepare("UPDATE users SET
                             email = :email, 
                             username = :username, 
                             firstName = :firstName, 
                             lastName = :lastName, 
                             birthDate = :birthDate,
                             password = :password 
                             WHERE id = :myId" , $datas);
        echo json_encode($req);
        return $req;
    }

}
