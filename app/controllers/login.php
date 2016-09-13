<?php
    if($_POST['logar']){
        require './model/connection/connection.php';

        $database = new Database();
        $conn = $database->getConnection();

        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        $sql = "select from user where username = '" . $username . "' and '" . $password . "'";

        $count = $conn->exec($sql);
        $conn = null;

        session_start();
        $_SESSION['logged_tagpush'] = ($count > 0);

        if ($count > 0) {
            header("Location: http://www.tagpush.com.br/paineldecontrole.php");
        }
    }
?>
