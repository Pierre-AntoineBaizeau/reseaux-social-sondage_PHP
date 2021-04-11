getFriendsSurveys();
getMySurveys();

function getFriendsSurveys() {
    $.ajax({
        url: "?action=get-friends-surveys",
        dataType: 'json',
        success: function (response) {
            $("#friends-surveys").empty();
            response.forEach(survey => {
                $("#friends-surveys").append(`
                <li>
                    <a href="?page=survey&survey=${survey.survey_id}">${survey.survey_title}</a> fait par ${survey.friend_username}
                </li>            
                `)
            });
        }
    })
}

function getMySurveys() {
    $.ajax({
        url: "?action=get-my-surveys",
        dataType: 'json',
        success: function (response) {
            $("#my-surveys").empty();
            response.forEach(survey => {
                $("#my-surveys").append(`
                <li class="padding">
                    <a href="?page=survey&survey=${survey.survey_id}">${survey.survey_title} ${survey.survey_end}</a>
                </li>            
                `)
            });
        }
    })
}

$('#button-logout').click(function(){
    $.ajax({
        url: "?action=log-out",
        dataType: 'json',
        success: function (response) {
            window.location.href = '?page=login';
        }
    })
})
