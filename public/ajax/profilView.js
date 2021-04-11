getMyInfo()



function getMyInfo() {
    $.ajax({
        url: "?action=get-my-infos",
        dataType: 'json',
        success: function (response) {
            $('#userName').val(response.username)
            $('#email').val(response.email)
            $('#firstName').val(response.firstName)
            $('#lastName').val(response.lastName)
            $('#birthDate').val(response.birthDate)
            
        }
    })
}

$('#formulaire').submit(function(e){
    e.preventDefault();
    updateMyInfo();
})


function updateMyInfo() {
    $.ajax({
        url: "?action=update-my-infos",
        method: "POST",
        dataType: 'json',
        data: {
            username: $('#userName').val(),
            email: $('#email').val(),
            firstName: $('#firstName').val(),
            lastName: $('#lastName').val(),
            birthDate: $('#birthDate').val(),
            password: $('#password').val()

        },
        success: function (response) {
            if (response) {
                getMyInfo();
            }
        }
    })
}
