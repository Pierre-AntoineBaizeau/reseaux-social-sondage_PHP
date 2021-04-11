<?php

namespace App\Model;

use Core\Database;

class FriendsModel extends Database
{
    /**
     * Get username list LIKE search value
     */
    public function getUsersByUsername($username)
    {
        // Search users
        $datas = array(
            "usernamePart" => '%' . $username . '%'
        );
        $req = $this->query("SELECT `id`, `username` FROM users WHERE username LIKE :usernamePart LIMIT 15", $datas);
        echo json_encode($req);
        return $req;
    }

    /**
     * Get all user friends
     */
    public function getMyFriends()
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode([]);
            return [];
        }

        // Get my friends from database
        $datas = array(
            "myId" => $_SESSION['id']
        );
        $req = $this->query("SELECT user.id, user.username, user.is_connected FROM `users` AS user INNER JOIN `friends` 
        WHERE (user.id = friends.user_id_A AND friends.user_id_B = :myId) 
        OR (user.id = friends.user_id_B AND friends.user_id_A = :myId)", $datas);

        echo json_encode($req);
        return $req;
    }

    /**
     * Verify already friends
     */
    private function verifyAlreadyFriends($userIdA, $userIdB)
    {
        $datas = array(
            "myId" => $userIdA,
            "friendId" => $userIdB
        );
        $req = $this->query(
            "SELECT id FROM `friends` 
            WHERE (user_id_A = :myId AND user_id_B = :friendId)
            OR (user_id_B = :myId AND user_id_A = :friendId)",
            $datas,
            true
        );

        if (!$req) {
            return false;
        }
        return true;
    }

    /**
     * Add a friend link to the database
     */
    public function addFriend($friendId)
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode(false);
            return false;
        }

        // Verify if users are already friends
        if ($this->verifyAlreadyFriends($_SESSION['id'], $friendId)) {
            echo json_encode(false);
            return false;
        }

        // Insert friend link in database
        $datas = array(
            "myId" => $_SESSION['id'],
            "friendId" => $friendId
        );
        $this->prepare("INSERT INTO `friends` (`user_id_A`, `user_id_B`) VALUES (:myId, :friendId)", $datas);
        echo json_encode(true);
        return true;
    }

    /**
     * Remove a friend link from the database
     */
    public function removeFriend($friendId)
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode(false);
            return false;
        }
        // Remove friend link in database
        $datas = array(
            "myId" => $_SESSION['id'],
            "friendId" => $friendId
        );
        $this->prepare("DELETE FROM `friends` WHERE (user_id_A = :myId AND user_id_B = :friendId) OR (user_id_B = :myId AND user_id_A = :friendId)", $datas);
        echo json_encode(true);
        return true;
    }
}
