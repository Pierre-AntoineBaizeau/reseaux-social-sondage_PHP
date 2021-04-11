<?php
namespace App\Controller;

use App\Model\ResultatModel;

class ResultatController{

    public function __construct()
    {
        $this->model = new ResultatModel();
    }

    public function getResult($datas)
    {
        if (array_key_exists('survey', $datas)) {
            $this->model->getResult($datas['survey']);
        }
    }

    public function render(){
        require ROOT."/App/View/resultatView.php";
    }
}