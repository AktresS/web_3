<?php
    session_start(["use_strict_mode" => true]);
    require("db.php");

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($user_name) || empty($email) || empty($password)){
        $_SESSION['message'] = '**Заполните все поля**';
        header('Location: index.php?page=register');
    }
    else{
        if (!empty($db)){

            $path = 'uploads/' . $_FILES['avatar']['name'];

            if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)){
                $_SESSION['message'] = 'Ошибка при загрузке аватара';
                header('Location: index.php?page=register');
            }

            $user_query = $db->query("INSERT INTO cupc_schem.user (user_name, email, password, avatar) OVERRIDING USER VALUE VALUES ( '$user_name', '$email', '".md5($_POST['password'])."', '$path')");
            $_SESSION['message'] = 'Регистрация прошла успешно';
            header('Location: index.php?page=login');
        }
    }
