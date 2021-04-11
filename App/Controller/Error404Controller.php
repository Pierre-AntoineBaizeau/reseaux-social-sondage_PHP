<?php

namespace App\Controller;

class Error404Controller
{
    public function render()
    {
        require ROOT . "/App/View/error404View.php";
    }
}
