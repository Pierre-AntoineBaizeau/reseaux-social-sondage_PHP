<?php

namespace App\Controller;

use App\Model\ProfilModel;

class ProfilController
{

    public function __construct()
    {
        $this->model = new ProfilModel();
    }

    public function getMyInfos()
    {
        $this->model->getMyInfos();
    }

    public function updateMyInfos($datas)
    {
        if(array_key_exists("username", $datas) 
            && array_key_exists("email", $datas) 
            && array_key_exists("firstName", $datas)
            && array_key_exists("lastName", $datas)
            && array_key_exists("birthDate", $datas)
            && array_key_exists("password", $datas)
        ){
            $this->model->updateMyInfos(
                htmlspecialchars($datas['username']),
                htmlspecialchars ($datas['email']),
                htmlspecialchars ($datas['firstName']),
                htmlspecialchars ($datas['lastName']),
                htmlspecialchars ($datas['birthDate']),
                htmlspecialchars ($datas['password'])
            );
        }
    }

    public function render()
    {
        require ROOT . "/App/View/profilView.php";
    }
}
