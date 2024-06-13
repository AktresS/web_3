<?php
    session_start(["use_strict_mode" => true]);

    $active = "inactive";
    $msg = "";

    if (isset($_SESSION["message"])) {
        $msg = $_SESSION["message"];
        $active = "";
        unset($_SESSION["message"]);
    }

    if (isset($_SESSION['email'])) {
        $text = $_SESSION['email'];
        $regi = 'Выход';
        $link = '#';
        $link2 = 'profile.php?logout=1';
        $ava = $_SESSION['avatar'];
    } else {
        $ava = 'uploads/user.svg';
        $link = 'index.php?page=login';
        $text = 'Вход';
        $regi = 'Регистрация';
        $link2 = 'index.php?page=register';
    }
?>

<div id="msg" class="message-modulo <? echo $active ?>">
        <p class="message-text"><? echo $msg ?></p>
</div>
<header class="header">
        <div class="container">
            <div class="row">
                <div class="authentication">
                    <div class="enter">
                        <a href="<?php echo($link); ?>" class="user"><img src="<?php echo($ava); ?>" alt="" class="user_avatar">
                            <?php
                                echo '<p class="user">' . $text . '</p>';
                            ?>
                        </a>
                    </div>
                    <div class="registration_block">
                        <a href="<?php echo($link2) ?>" class="registration">
                            <?php
                                echo ($regi);
                            ?>
                        </a>
                    </div>

                </div>

                <div class="menu">
                    <a href="index.php" class="logo"><img src="img/icons/logo.svg" alt=""></a>
                    <div class="box-search-box">
                        <div class="search-box">
                            <a href="#" class="search-icn"><img src="img/icons/grey-search.svg" alt=""></a>
                            <input type="text" class="search" name="" placeholder="Поиск">
                        </div>
                    </div>
                    <div class="internal_menu">
                        <nav>
                            <ul class="nav_menu">
                                <li class="list"><a href="index.php?page=catalog">Каталог</a></li>
                                <li class="list"><a href="">Доставка</a></li>
                                <li class="list"><a href="">Скидки</a></li>
                                <li class="list"><a href="">Отзывы</a></li>
                            </ul>
                            <button class="nav-button">
                                <img src="img/icons/burger2.svg" alt="">
                            </button>
                        </nav>
                    </div>
                    <div class="s_h_b">
                        <a href="" class="but"><img src="img/icons/search.svg" alt=""></a>
                        <a href="" class="but"><img src="img/icons/favorites.svg" alt=""></a>
                        <a href="" class="but"><img src="img/icons/basket.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
</header>