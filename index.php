<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- JQuery -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="study-o.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Study-O!</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Login</a></li>
                <li><a href="#contact">Register</a></li>

            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Hello User!</h2>
        </div>

        <div>
            <form>
                Email:<br>
                <input id="login_email" type="text" name="email"><br>
                Password:<br>
                <input id="login_pass" type="password" name="password">
                <button id="btn_login" class="btn btn-default">Login</button>
            </form>

        </div>

    </div>

    <div id="workspaces_space" class="row">

        <div class="workspace col-md-3">Description:</div></br>
        <div class="workspace col-md-3"></div></br>
        <div class="workspace col-md-3"></div>

    </div>


</div><!-- /.container -->


<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- Latest compiled and minified JavaScript bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="main.js"></script>


<script>

    <!-- LOGIN AJAX -->

    $(document).on('click', '#btn_login', function() {
        var email = $('#login_email').val();
        var password = $('#login_pass').val();
//        $('#login_name').getElementById('login_name').value;
        console.log(email);

        login_user_exists();

    });

    //  1. HOME PAGE
    //  GET WORKSPACES NAMES AND DESCRIPTIONS INTO UI

    display_workspace_info();




</script>



</body>
</html>