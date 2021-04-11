<?php
namespace App\Model;

use Core\Database;

class ResultatModel extends Database{

    public function getResult($id)
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
        $response = $this->query("SELECT id, `text`, `count` FROM surveys_answers WHERE survey_id = :id", $datas);
        $res = array(
            "title" => $info->title,
            "answers" => $response
        );
        echo json_encode($res);
        return $res;
    }
}