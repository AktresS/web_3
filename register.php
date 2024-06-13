

    <section class="section_form">
        <div class="container">
            <form method="post" action="singup.php" class="form" enctype="multipart/form-data">
                <h1 class="form_title">Вход на сайт</h1>

                <div class="form__group">
                    <input type="text" class="form_input" placeholder="Имя пользователя" name="user_name">
                    <input type="email" class="form_input" placeholder="Email" name="email">
                    <input type="password" class="form_input" placeholder="Пароль" name="password">
                    <input type="file" class="form_file" name="avatar">
                </div>

                <button class="form__button" type="submit">Зарегистрироваться</button>
                <p class="form_avto">У вас есть аккаунт? - <a href="index.php?page=login">авторизуйтесь</a>!</p>
                <?php
                    if (isset($_SESSION['message'])){
                        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </form>
        </div>
    </section>
