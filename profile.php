<?php
    session_start(["use_strict_mode" => true]);
    require('db.php');

    if (isset($_GET['logout'])) {
        session_unset();
        $_SESSION['message'] = 'Вы успешно вышли из системы';
        header("Location: index.php");
        die();
    }

    if (isset($_POST['login'])) {
        if (!empty($db)){
            $query = $db->query("SELECT * FROM cupc_schem.user WHERE email = '".strtolower($_POST['login'])."'");

            if ($row = $query->fetch())
            {
                if (md5($_POST["password"]) == $row['password']) {
                    $_SESSION['email'] = $_POST['login'];
                    $_SESSION['avatar'] = $row['avatar'];
                    $_SESSION['message'] = 'Вы успешно вошли в систему';
                    header("Location: index.php");
                }
                else {
                    $_SESSION['message'] = 'Вы ввели неправильный пароль!';
                    header("Location: index.php?page=login");
                    die();
                }
            }
            else {
                $_SESSION['message'] = 'Вы ввели неправильный логин!';
                header("Location: index.php?page=login");
                die();
            }
        }
    }

?>
