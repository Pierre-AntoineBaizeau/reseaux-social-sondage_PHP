<?php

namespace App\Model;

use Core\Database;

class CreateSurveyModel extends Database
{
    /**
     * Insert survey in the database
     */
    public function createSurvey($title, $endDate, $answers)
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            return;
        }

        // Insert survey infos
        $datas = array(
            "title" => $title,
            "authorPid" => $_SESSION['id'],
            "endDate" => $endDate,
        );
        $this->prepare("INSERT INTO `surveys` (`title`, `author_id`, `end_date`) VALUES (:title, :authorPid, :endDate)", $datas);

        // Insert survey answers
        $surveyId = $this->getLastInsertId();
        foreach ($answers as $answer) {
            $datas = array(
                'surveyId' => $surveyId,
                'content' => $answer
            );
            $this->prepare("INSERT INTO `surveys_answers` (`survey_id`, `text`) VALUES (:surveyId, :content)", $datas);
        }

        header('Location: ?page=survey&survey='.$surveyId);
    }

    /**
     * Create answers list
     */
    public function formatAnswers($datas)
    {
        // Init answers list
        $answers = [];

        // Generate list from datas
        $nb = 1;
        while (array_key_exists("answer_" . $nb, $datas)) {
            array_push($answers, $datas["answer_" . $nb]);
            $nb++;
        }
        return $answers;
    }
}
