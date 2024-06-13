
    <?
        if (isset($_SESSION['email'])) {
            header("Location: index.php");
            die();
        }
    ?>
    <section class="section_form">
        <div class="container">
            <form method="post" action="profile.php" class="form">
                <h1 class="form_title">Вход на сайт</h1>
                
                <div class="form__group">
                    <input type="text" class="form_input" placeholder="Логин" name="login">
                    <input type="password" class="form_input" placeholder="Пароль" name="password">
                </div>

                <button class="form__button" type="submit">Войти</button>
                <p class="form_avto">У вас нет аккаунта? - <a href="index.php?page=register">зарегистрируйся</a>!</p>
                <?
                if (isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
            </form>
        </div>
        
    </section>
