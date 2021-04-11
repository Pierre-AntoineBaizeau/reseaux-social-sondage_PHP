<?php

namespace App\Controller;

use App\Model\FriendsModel;

class FriendsController
{

    public function __construct()
    {
        $this->model = new FriendsModel();
    }

    /**
     * Call to get usernames list
     */
    public function searchUser($datas)
    {
        if (array_key_exists("usernamePart", $datas)) {
            $this->model->getUsersByUsername(
                htmlspecialchars($datas['usernamePart'])
            );
        }
    }

    /**
     * Call to get user friends list
     */
    public function getFriends()
    {
        $this->model->getMyFriends();
    }

    /**
     * Call to remove friend
     */
    public function removeFriend($datas)
    {
        if (array_key_exists("friendId", $datas)) {
            $this->model->removeFriend(
                htmlspecialchars($datas["friendId"])
            );
        }
    }

    /**
     * Call to add friend
     */
    public function addFriend($datas)
    {
        if (array_key_exists("friendId", $datas)) {
            $this->model->addFriend(
                htmlspecialchars($datas["friendId"])
            );
        }
    }

    /**
     * Call to diplay view
     */
    public function render()
    {
        require ROOT . "/App/View/friendsView.php";
    }
}
