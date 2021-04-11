let urlParams = new URLSearchParams(window.location.search);
let survey_id = urlParams.get('survey');
if(urlParams.has('survey')){
    getSurvey(survey_id);
}

function getSurvey(id) {
    $.ajax({
        url: `?action=get-survey&survey=${id}`,
        dataType: 'json',
        success: function (response) {
            $('#survey-title').text(response.title);
            response.answers.forEach(answer => {
                $('#survey-answers').append(
                    `<li><button onclick="saveVote(${answer.id})"> ${answer.text}</button></li>`
                )
            });
        }
    })
}

function saveVote(id) {
    $.ajax({
        url: "?action=save-vote",
        dataType: 'json',
        method: 'POST',
        data:{
            answer: id
        },
        success: function (response) {
            if (response) {
                window.location.href = `?page=result&survey=${survey_id}`;
            }
        }
    })
}
