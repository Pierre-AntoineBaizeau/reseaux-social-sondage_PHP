let urlParams = new URLSearchParams(window.location.search);
let survey_id = urlParams.get('survey');
if(urlParams.has('survey')){
    getResult(survey_id);
}

function getResult(id) {
    $.ajax({
        url: `?action=get-result&survey=${id}`,
        dataType: 'json',
        success: function (response) {
            $('#survey-title').text(response.title);
            response.answers.forEach(answer => {
                $('#survey-answers').append(
                    `<li>${answer.count} vote(s) pour ${answer.text}</li>`
                )
            });
        }
    })
}