<section class="main_offer">
        <div class="container">   
            <div class="offer">
                <h1>БЕСПЛАТНАЯ ДОСТАВКА КОФЕ<br>ПО ВСЕЙ РОССИИ</h1>
                <div class="text_offer">
                    Каждый день мы обжариваем кофе, чтобы <br>порадовать вас вкусными напитками
                </div>
            </div>
            <div class="shell">
                <div class="popularity">       
                    <button class="popul"><img src="img/icons/cup.svg" alt="" class="img-popul">Популярное</button>
                </div>
                <div class="discount">       
                    <button class="disc"><img src="img/icons/percant.svg" alt="" class="img-disc">Скидки</button>
                </div>
            </div>
            
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="flexCard">
                <h3>Новинки</h3>
                <div class="card-wrap">
                <? 
                    require('db.php');

                    $products = $db->query("SELECT * FROM cupc_schem.product LIMIT 3");
                    $categories = $db->query("SELECT * FROM cupc_schem.categories");
                    $products_row = $products->fetchAll();
                    $categories_row = $categories->fetchAll();

                    foreach($products_row as $product){
                        $category = $categories_row[$product['category_id'] - 1];
                        $card = '
                            <div class="card-box">
                                <div class="top-card">
                                    <img src="%image%" alt="">
                                </div>
                                <div class="top-center">
                                    <a href="#">
                                        <img src="" alt="">
                                    </a>
                                </div>
                                <div class="text-card">
                                    <h5>%name%</h5>
                                    <p>%description%</p>
                                    <p>Категория: %categories%</p>
                                </div>
                                <div class="dop_set">
                                    <div class="weight">
                                        <img src="img/icons/minus.svg" alt="">
                                        <div class="text-gr">%weight% гр.</div>
                                        <img src="img/icons/plus.svg" alt="">
                                    </div>
                                    <div class="amount">
                                        <img src="img/icons/minus.svg" alt="">
                                        <div class="text-gr">1 шт.</div>
                                        <img src="img/icons/plus.svg" alt="">
                                    </div>
                                    <div class="price">%price% р.</div>
                                </div>
                                <button class="button-card">
                                    КУПИТЬ
                                </button>
                            </div>
                        ';
                        
                        //$card = str_replace('%image%', $product['image'], $card);
                        $card = str_replace('%name%', mb_strtoupper($product['name']), $card);
                        $card = str_replace('%description%', $product['description'], $card);
                        $card = str_replace('%categories%', $category['category'], $card);
                        $card = str_replace('%weight%', $product['weight'], $card);
                        $card = str_replace('%price%', $product['price'], $card);
                        
                        echo($card);
                    }
                ?>
                </div>
            </div>    
        </div>
    </section>

    <section class="section-2">
        <div class="container">
            <div class="info_us">
                <h3>Подробнее о нас</h3>
                <div class="card-info-box">
                    <div class="card-info">
                        <div class="image-info"><img src="img/icons/coffee_beans.svg" alt=""></div>
                        <div class="text-info">
                            Качественное сырьё от проверенных поставщиков кофе. Оптовые поставки лучших сортов кофе с уникальными вкусовыми  и ароматическими свойствами, которые оценит любой кофеман.
                        </div>
                    </div>
                    <div class="card-info">
                        <div class="image-info"><img src="img/icons/coffee_bag.svg" alt=""></div>
                        <div class="text-info">
                            Обработка путём грамотной обжарки и последующая упаковка кофе в 1 кг в специальные пакеты с фирменным логотипом.
                        </div>
                    </div>
                    <div class="card-info">
                        <div class="image-info"><img src="img/icons/coffee_breawing.svg" alt=""></div>
                        <div class="text-info">
                            Профессиональное оборудование для приготовления кофе-напитков из зернового кофе от производителя. У нас есть всё: от мультифункциональных эспрессо-машин и миниатюрных кофеварок до аксессуаров и водоочистительных приборов.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>