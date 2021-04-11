<?php

namespace App\Controller;

use App\Model\RegisterModel;

class RegisterController
{

    public function __construct()
    {
        $this->model = new RegisterModel();
    }

    public function createUser($datas)
    {
        if (array_key_exists("actionSaveUser", $datas)) {
            $this->model->register($datas["username"], $datas["email"], $datas["password"]);
        }
    }

    public function render()
    {
        require ROOT . "/App/View/registerView.php";
    }
}
