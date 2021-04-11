

<?php

use App\Controller\ProfilController;
use App\Controller\CreateSurveyController;
use App\Controller\Error404Controller;
use App\Controller\AccueilController;
use App\Controller\RegisterController;
use App\Controller\ConnexionController;
use App\Controller\FriendsController;
use App\Controller\SurveyController;
use App\Controller\ResultatController;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'profil':
            $controller = new ProfilController();
            $controller->render();
            break;
        case 'new':
            $controller = new CreateSurveyController();
            $controller->render();
            break;
        case 'register':
            $controller = new RegisterController();
            $controller->createUser($_POST);
            $controller->render();
            break;
        case 'login':
            $controller = new ConnexionController();
            $controller->login($_POST);
            $controller->render();
            break;
        case 'friends':
            $controller = new FriendsController();
            $controller->render();
            break;
        case 'survey':
            $controller = new SurveyController();
            $controller->render();
            break;
        case 'result':
            $controller = new ResultatController();
            $controller->render();
            break;
        default:
            $controller = new Error404Controller();
            $controller->render();
            break;
    }
} else if (array_key_exists("action", $_GET)) {
    switch ($_GET["action"]) {
        case 'search-user':
            $controller = new FriendsController();
            $controller->searchUser($_POST);
            break;
        case 'get-friends':
            $controller = new FriendsController();
            $controller->getFriends($_POST);
            break;
        case 'get-my-infos':
            $controller = new ProfilController();
            $controller->getMyInfos();
            break;
        case 'update-my-infos':
            $controller = new ProfilController();
            $controller->updateMyInfos($_POST);
            break;
        case 'add-friend':
            $controller = new FriendsController();
            $controller->addFriend($_POST);
            break;
        case 'remove-friend':
            $controller = new FriendsController();
            $controller->removeFriend($_POST);
            break;
        case 'create-survey':
            $controller = new CreateSurveyController();
            $controller->saveSurvey($_POST);
            $controller->render();
            break;
        case 'get-friends-surveys':
            $controller = new AccueilController();
            $controller->getFriendsSurveys();
            break;
        case 'get-my-surveys':
            $controller = new AccueilController();
            $controller->getMySurveys();
            break;
        case 'get-survey':
            $controller = new SurveyController();
            $controller->getSurvey($_GET);
            break;
        case 'get-result':
            $controller = new ResultatController();
            $controller->getResult($_GET);
            break;
        case 'save-vote':
            $controller = new SurveyController();
            $controller->saveVote($_POST);
            break;
        case 'log-out':
            $controller = new ConnexionController();
            $controller->logOut();
            break;
        default:
            break;
    }
} else {
    $controller = new AccueilController();
    $controller->render();
}


