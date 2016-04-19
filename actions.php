<?php


    function login($email, $password) {
        include 'db-connect.php';
    //          STEPS IN ACCESSING THE DB
    //          prepare the query
        $query = $conn->prepare("SELECT * FROM users WHERE email=:email and password=:password");
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
    //          execute the query
        $query->execute();
    //          retrieve data from the executed query
        $user_info = $query->fetchAll(PDO::FETCH_ASSOC);

        if (count($user_info) == 1) {
            echo '{"db_result": "the user exists!"}';

        }else{
            echo '{"db_result":"error"}';
        }

    }


    function get_workspace_info() {
        include 'db-connect.php';
        $query = $conn->prepare("SELECT name FROM workspaces");
        $query->execute();
        $workspace_info = $query->fetchAll(PDO::FETCH_ASSOC);
        $result = $query->rowCount();

        if ($result > 0) {
            echo json_encode($workspace_info);
        }

    }


?>