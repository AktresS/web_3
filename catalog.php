<section class="section">
    <div class="container">
        <div class="flexCard">
            <h3>Каталог кофе</h3>
            <div class="card-wrap">
                <? 
                    require('db.php');

                    $products = $db->query("SELECT * FROM cupc_schem.product");
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
