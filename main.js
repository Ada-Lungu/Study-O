

function login_user_exists() {

    $(document).on('click', '#btn_login', function() {
        var email = $('#login_email').val();
        var password = $('#login_pass').val();
//        $('#login_name').getElementById('login_name').value;
        console.log(email);

    $.ajax('ajax.php', {
        method: post,
        data: {"action": "login", "username": email, "password": password},
        dataType: 'json'

    }).done(function (response) {
        var db_response = response.db_result;
        console.log(db_response);

    }).fail(function () {

    });
});


function display_workspace_info(){

    $.ajax('ajax.php', {
        data: {"action":"get_workspace_info"},
        dataType: 'json'

    }).done(function(response) {
        console.log("success!");
        console.log(response); // i should get the json format with the workspaces info

//      here comes the for loop through the json, extracting what i want for display

        for (var i=0; i<response.length; i++){
            $('.workspace').html('response[i].name');
        }

//      JSON: {"workspaces:
//                         ["id":"1","name":"Math Lab","description":"perfect match"]
//                         ["id":"2","name":"Bio", "description":"turn on experiment"]
//                         ["":"","":"",]
//      }

    }).fail(function(response) {
        console.log("fail");
    });

}


