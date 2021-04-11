<?php

namespace App\Controller;

use App\Model\SurveyModel;

class SurveyController
{

    public function __construct()
    {
        $this->model = new SurveyModel();
    }

    public function getSurvey($datas)
    {
        if (array_key_exists('survey', $datas)) {
            $this->model->getSurvey($datas['survey']);
        }
    }

    public function saveVote($datas)
    {
        if (array_key_exists('answer', $datas)) {
            $this->model->saveVote($datas['answer']);
        }
    }

    public function render()
    {
        require ROOT . "/App/View/surveyView.php";
    }
}
