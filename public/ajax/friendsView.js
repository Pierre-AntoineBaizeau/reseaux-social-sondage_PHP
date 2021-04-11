getFriends();

$("#searching-input").keyup(function () {
    $("#searching-list").empty();
    if ($(this).val() != "") {
        $.ajax({
            url: "?action=search-user",
            method: "POST",
            dataType: 'json',
            data: {
                usernamePart: $(this).val()
            },
            success: function (response) {
                response.forEach(user => {
                    $("#searching-list").append(`<div><button onclick="addFriend(${user.id}, '${user.username}')">Ajouter ${user.username} en amis</button></div>`)
                });
            }
        })
    }
});

function getFriends() {
    $.ajax({
        url: "?action=get-friends",
        dataType: 'json',
        success: function (response) {
            $("#my-friends").empty();
            response.forEach(user => {
                if (user.is_connected == 1) {
                    $("#my-friends").append(`
                    <tr>
                    <td>${user.username}</td>
                    <td><button onclick="removeFriend(${user.id})">Ne plus être amis</button></td>
                    <td style="color: green">connécté</td>
                    </tr>
                    `)
                }
                else {
                    $("#my-friends").append(`
                    <tr>
                    <td>${user.username}</td>
                    <td><button onclick="removeFriend(${user.id})">Ne plus être amis</button></td>
                    <td style="color: red">non connécté</td>
                    </tr>
                    `)
                }
            });
        }
    })
}

function addFriend(friendId, friendName) {
    $.ajax({
        url: "?action=add-friend",
        method: "POST",
        dataType: 'json',
        data: {
            friendId: friendId
        },
        success: function (response) {
            if (response) {
                $("#searching-list").text(`${friendName} a été ajouté à vos amis`);
                getFriends();
            }
        }
    })
}

function removeFriend(friendId) {
    $.ajax({
        url: "?action=remove-friend",
        method: "POST",
        dataType: 'json',
        data: {
            friendId: friendId
        },
        success: function (response) {
            if (response) {
                getFriends();
            }
        }
    })
}
