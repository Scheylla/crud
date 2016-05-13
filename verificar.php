<?php

    include 'views/header.php';
    require 'config.php';

    //global $DB;

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $result = pg_query ("SELECT * FROM usuario WHERE usuario = '$login' AND senha= '$senha'");

    if (pg_num_rows ($result) > 0)
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header ('location:index.php');
    }
    else
    {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        echo"
            <script>
                alert('Senha Incorreta');
                window.location='login.php'
            </script>";
    }

?>