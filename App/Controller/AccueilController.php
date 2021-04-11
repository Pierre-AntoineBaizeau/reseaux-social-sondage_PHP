<?php

namespace App\Controller;

use App\Model\AccueilModel;

class AccueilController
{

    public function __construct()
    {
        $this->model = new AccueilModel();
    }

    /**
     * Call to get user friends surveys
     */
    function getFriendsSurveys()
    {
        $this->model->getFriendsSurveys();
    }

    /**
     * Call to get user my surveys
     */
    function getMySurveys()
    {
        $this->model->getMySurveys();
    }

    /**
     * Call to render the view
     */
    public function render()
    {
        require ROOT . "/App/View/accueilView.php";
    }
}
