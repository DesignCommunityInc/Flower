  <section class="main_container">
            <!-- VIEWPORT -->
            <section class="viewport">
                <div class="content_wrapper" id="news">
                    <div class="header">
                        <label class="view_label reccomended_label">Мы рекомендуем</label>
                        <span class="line"></span>
                    </div>
                    <div class="body">
                        <?php
                        foreach($news as $product)
                        {
                            echo
                            "<div class='product' id='" . $product["ID"] . "'>" .
                            "<img src='" . $product["image_path"] . "'>" .
                            "<div class='rate_block'>" . 
                            "<div class='rate_star star_selected'> </div>" . 
                            "<div class='rate_star star_selected'> </div>" . 
                            "<div class='rate_star star_selected'> </div>" . 
                            "<div class='rate_star'> </div>" . 
                            "<div class='rate_star'> </div>" . 
                            "</div>" . 
                            "<div class='tocart'>" .
                            "<label>В корзину</label>" .
                            "</div>" .
                            "<span class='line'></span>" .
                            "<p>" . $product["title"] . "</p>" .
                            "<label name='price' class='price'>" . $product["price"] . "</label>" .
                            "<a href='/product/?id=" . $product["ID"] . "' class='ref'></a>" .
                            "</div>";
                        }
                        ?>
                </div>
            </div>

            
                <div class="content_wrapper" id="sales">
                    <div class="header">
                        <label class="view_label sales_label">Скидки и акции</label>
                        <span class="line" style="width: 50px;"></span>
                    </div>
                    <div class="market_part">
                        <div class="big_sale_picture">
                            <!-- <img src="/wwwroot/images/icons/catalog_images/body.jpg"/> -->
                            <div class="big_sale_label">
                                <label>Пора на море</label>
                                <p>скидки на товары для загара до 40%</p>
                            </div>
                        </div>
                        <div class="small_sale_picture">
                        <label>Скидки</label>
                            <p>каждый день</p>
                        </div>
                        <div class="small_sale_picture">
                            <label>Больше</label>
                            <p>акций для вас</p>
                        </div>
                    </div>
                    <div class="body">
                        <?php
                        $counter = 0;
                        foreach($sales as $product)
                        {
                            if($counter > 3) break;
                            echo
                            "<div class='product' id='" . $product["ID"] . "'>" .
                            "<div class='sale_icon'>%</div>" . 
                            "<div class='rate_block'>" . 
                            "<div class='rate_star star_selected'> </div>" . 
                            "<div class='rate_star star_selected'> </div>" . 
                            "<div class='rate_star star_selected'> </div>" . 
                            "<div class='rate_star'> </div>" . 
                            "<div class='rate_star'> </div>" . 
                            "</div>" . 
                            "<img src='" . $product["image_path"] . "'>" .
                            "<div class='tocart'>" .
                            "<label>В корзину</label>" .
                            "</div>" .
                            "<span class='line'></span>" .
                            "<p>" . $product["title"] . "</p>" .
                            "<label name='price' class='price' attr-data='1500'>" . $product["price"] . "</label>" .
                            "<a href='/product/?id=" . $product["ID"] . "'  class='ref'></a>" .
                            "</div>";
                            $counter++;
                        }
                        ?>
                    </div>
                </div>
                <section class="season_share">
                    <img src="/wwwroot/images/summer_header.jpg" draggable="false" />
                </section>
                <div class="offer">
                    <img src="/wwwroot/images/summer_price.jpg" />
                    <div class="button">Побробнее</div>
                </div>
                <div class="content_wrapper" id="summer">
                    <!-- <div class="header dynamic_header">
                        <label class="view_label">Летние товары</label>
                        <span class="line dynamic_line"></span>
                    </div> -->

                    <div class="body">
                        <?php
                        foreach($seasons as $product)
                        {
                            echo
                            "<div class='product dynamic_product' id='" . $product["ID"] . "'>" .
                            "<img src='" . $product["image_path"] . "'>" .
                            "<div class='tocart'>" .
                            "<label>В корзину</label>" .
                            "</div>" .
                            "<span class='line'></span>" .
                            "<p>" . $product["title"] . "</p>" .
                            "<label name='price' class='price'>" . $product["price"] . "</label>" .
                            "<a href='/product/?id=" . $product["ID"] . "'  class='ref'></a>" .
                            "</div>";
                        }
                        ?>
                    </div>
                </div>
            </section>
    </section>
