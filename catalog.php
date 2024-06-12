<?php
session_start(["use_strict_mode" => true]);

if (isset($_SESSION['email'])) {
    $text = $_SESSION['email'];
    $regi = 'Выход';
    $link2 = 'profile.php?logout=1';
    $ava = $_SESSION['avatar'];
} else {
    $ava = 'uploads/user.svg';
    $link = 'login.php';
    $text = 'Вход';
    $regi = 'Регистрация';
    $link2 = 'register.php';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cup Coffee</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

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
                <a href="index.php" class="logo"><img src=img/icons/logo.svg" alt=""></a>
                <div class="box-search-box">
                    <div class="search-box">
                        <a href="#!" class="search-icn"><img src="img/icons/grey-search.svg" alt=""></a>
                        <input type="text" class="search" name="" placeholder="Поиск">
                    </div>
                </div>
                <div class="internal_menu">
                    <nav>
                        <ul class="nav_menu">
                            <li class="list"><a href="">Каталог</a></li>
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

<section class="section">
    <div class="container">
        <div class="flexCard">
            <h3>Каталог кофе</h3>
            <div class="card-wrap">
                <div class="card-box">
                    <div class="top-card">
                        <img src="img/icons/heart_back.svg" alt="">
                    </div>
                    <div class="top-center">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="text-card">
                        <h5>ЭФИОПИЯ СИДАМО</h5>
                        <p>Легкий кофе с нотами цветов, желтых фруктов и спелого лимона</p>
                    </div>
                    <div class="dop_set">
                        <div class="weight">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">250 гр.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="amount">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">1 шт.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="price">549 р.</div>
                    </div>
                    <button class="button-card">
                        КУПИТЬ
                    </button>
                </div>

                <div class="card-box">
                    <div class="top-card">
                        <img src="img/icons/heart_back.svg" alt="">
                    </div>
                    <div class="top-center">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="text-card">
                        <h5>БРАЗИЛИЯ СЕРРАДО</h5>
                        <p>Плотный кофе с нотами жареных орехов, шоколада и карамели</p>
                    </div>
                    <div class="dop_set">
                        <div class="weight">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">250 гр.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="amount">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">1 шт.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="price">449 р.</div>
                    </div>
                    <button class="button-card">
                        КУПИТЬ
                    </button>
                </div>

                <div class="card-box">
                    <div class="top-card">
                        <img src="img/icons/heart_back.svg" alt="">
                    </div>
                    <div class="top-center">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="text-card">
                        <h5>БРАЗИЛИЯ МОЖИАНА</h5>
                        <p>Плотный кофе с нотами фундука, какао и сухофруктов</p>
                    </div>
                    <div class="dop_set">
                        <div class="weight">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">250 гр.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="amount">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">1 шт.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="price">489 р.</div>
                    </div>
                    <button class="button-card">
                        КУПИТЬ
                    </button>
                </div>

                <div class="card-box">
                    <div class="top-card">
                        <img src="img/icons/heart_back.svg" alt="">
                    </div>
                    <div class="top-center">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="text-card">
                        <h5>ЭФИОПИЯ СИДАМО</h5>
                        <p>Легкий кофе с нотами цветов, желтых фруктов и спелого лимона</p>
                    </div>
                    <div class="dop_set">
                        <div class="weight">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">250 гр.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="amount">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">1 шт.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="price">549 р.</div>
                    </div>
                    <button class="button-card">
                        КУПИТЬ
                    </button>
                </div>

                <div class="card-box">
                    <div class="top-card">
                        <img src="img/icons/heart_back.svg" alt="">
                    </div>
                    <div class="top-center">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="text-card">
                        <h5>ЭФИОПИЯ СИДАМО</h5>
                        <p>Легкий кофе с нотами цветов, желтых фруктов и спелого лимона</p>
                    </div>
                    <div class="dop_set">
                        <div class="weight">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">250 гр.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="amount">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">1 шт.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="price">549 р.</div>
                    </div>
                    <button class="button-card">
                        КУПИТЬ
                    </button>
                </div>

                <div class="card-box">
                    <div class="top-card">
                        <img src="img/icons/heart_back.svg" alt="">
                    </div>
                    <div class="top-center">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="text-card">
                        <h5>ЭФИОПИЯ СИДАМО</h5>
                        <p>Легкий кофе с нотами цветов, желтых фруктов и спелого лимона</p>
                    </div>
                    <div class="dop_set">
                        <div class="weight">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">250 гр.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="amount">
                            <img src="img/icons/minus.svg" alt="">
                            <div class="text-gr">1 шт.</div>
                            <img src="img/icons/plus.svg" alt="">
                        </div>
                        <div class="price">549 р.</div>
                    </div>
                    <button class="button-card">
                        КУПИТЬ
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="fot-con">
            <div class="fot-logo"><img src="img/icons/logo.svg" alt=""></div>
            <div class="fot-menu">
                <div class="fot-internal_menu">
                    <nav>
                        <ul class="fot-nav-menu">
                            <li class="fot-list"><a href="">Каталог</a></li>
                            <li class="fot-list"><a href="">Доставка</a></li>
                            <li class="fot-list"><a href="">Скидки</a></li>
                            <li class="fot-list"><a href="">Отзывы</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="subsribe">
                <h3>Подпишитесь на нас</h3>
                <div class="social">
                    <div class="fot-soc">
                        <img src="img/icons/telega.svg" alt="">
                        <p>cupcoffee</p>
                    </div>
                    <div class="fot-soc">
                        <img src="img/icons/vk.svg" alt="">
                        <p>cupcoffee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>