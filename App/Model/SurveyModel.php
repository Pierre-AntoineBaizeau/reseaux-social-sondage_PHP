<?php
namespace App\Model;

use Core\Database;

class SurveyModel extends Database{

    public function getSurvey($id)
    {
        // Search surveys title
        $datas = array(
            "id" =>  $id
        );
        $info = $this->query("SELECT title FROM surveys WHERE id = :id", $datas, true);
        // Search surveys response
        $datas = array(
            "id" => $id
        );
        $response = $this->query("SELECT id, `text` FROM surveys_answers WHERE survey_id = :id", $datas);
        $res = array(
            "title" => $info->title,
            "answers" => $response
        );
        echo json_encode($res);
        return $res;
    }

    public function saveVote($id)
    {
        $datas = array(
            "id" =>  $id
        );
        $req = $this->prepare("UPDATE surveys_answers SET `count` = `count` + 1 WHERE id = :id", $datas);
        echo json_encode($req);
        return $req;
    }
}