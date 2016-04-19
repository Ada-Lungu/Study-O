<?php

//include 'db-connect.php';
include 'index.php';
include 'actions.php';

    $action = $_GET['action'];

    if ($action == "login") {

        $email= $_GET['email'];
        $password = $_GET['password'];
        login($email, $password);

    }

    if ($action == "get_workspace_info") {
        get_workspace_info();
    }

?>
