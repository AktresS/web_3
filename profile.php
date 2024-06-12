<?php
    session_start(["use_strict_mode" => true]);

    if (isset($_GET['logout'])) {
        session_unset();
        header("Location: index.php");
        die();
    }

    if (isset($_GET['register'])) {
        $_SESSION['email'] = strtolower($_POST['login']);

        header("Location: index.php");
        die();
    } else if (isset($_POST['login'])) {
        if($_POST["login"] == 'admin'){
            if ($_POST["password"] == 'admin') {
                $_SESSION['email'] = $_POST['login'];
                $_SESSION['avatar'] = 'uploads/ava.png';
                $_SESSION['message'] = 'Вы успешно вошли в сиситему';
                header("Location: login.php");
                die();
            }
            else {
                $_SESSION['message'] = 'Вы ввели неправильный пароль!';
                header("Location: login.php");
                die();
            }
        }
    }

?>
