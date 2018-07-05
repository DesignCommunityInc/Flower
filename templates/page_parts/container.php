  <section class="main_container">
            <!-- SEARCH -->
            <section class="search_wrapper">
                <div class="search">
                    <input type="text" placeholder="" id="src_input" />
                    <div id="ripple" class="centered">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>

                    <div class="src_circle"></div>
                    <img src="/wwwroot/images/icons/src.png" class="src_img" width="38" />

                </div>
                <p>Поиск на сайте</p>
            </section>
            <!-- VIEWPORT -->
            <section class="viewport">
                <div class="content_wrapper" id="news">
                    <div class="header">
                        <label class="view_label">Новинки каталога</label>
                        <span class="line"></span>
                    </div>
                    <div class="body">
                        <?php
                        for($i = 0; $i < 12; $i++)
                        {
                            echo
                            "<a href='https://Flower/shop/product/' class='product'>" .
                            "<img src='/wwwroot/images/products/product" . $i . ".png'>" .
                            "<div class='tocart'>" .
                            "<label>В корзину</label>" .
                            "</div>" .
                            "<span class='line'></span>" .
                            "<p>Бальзам для рук SOS восстановление</p>" .
                            "<label name='price' class='price'>720 ₽</label>" .
                            "<div class='gradient'></div>" .
                            "</a>";
                        }
                        ?>
                </div>
            </div>

                <section class="daily_share">
                    <div class="daily_image">
                        <img src='/wwwroot/images/rotate_in_motion.png' draggable="false" />
                        <img src='/wwwroot/images/lines.png' draggable="false"/>
                    </div>
                  <!--<div class="container">
                    <?php
                    for($i = 0; $i < 3; $i++)
                    {
                        echo
                        "<div class='share_item'>" .
                        "<div class='share_bg1'></div>" .
                        "<div class='share_bg2'></div>" .
                        "<div class='share_circle'>" .
                        "<label class='share_number'>20</label>" .
                        "<label>%</label>" .
                        "</div>" .
                        "<p class='share_description'>На товары категории косметика для тела</p>" .
                        "<label class='share_date'>1 - 2 июня</label>" .
                        "</div>";
                    }
                    ?>
                  </div>-->
              </section>
                <div class="content_wrapper" id="sales">
                    <div class="header">
                        <label class="view_label">Скидки</label>
                        <span class="line" style="width: 50px;"></span>
                    </div>
                    <div class="body">
                        <?php
                        for($i = 0; $i < 12; $i++)
                        {
                            echo
                            "<a href='https://Flower/product.php' class='product'>" .
                            "<label class='product_type'>Скидка</label>" .
                            "<img src='/wwwroot/images/products/product" . $i . ".png'>" .
                            "<div class='tocart'>" .
                            "<label>В корзину</label>" .
                            "</div>" .
                            "<span class='line'></span>" .
                            "<p>Бальзам для рук SOS восстановление</p>" .
                            "<label name='price' class='price'>720 ₽</label>" .
                            "<div class='gradient'></div>" .
                            "</a>";
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
                    <div class="header dynamic_header">
                        <label class="view_label">Летние товары</label>
                        <span class="line"></span>
                    </div>

                    <div class="body">
                        <?php
                        for($i = 0; $i < 12; $i++)
                        {
                            echo
                            "<a href='https://Flower/product.php' class='product dynamic_product'>" .
                            "<label class='product_type'>Скидка</label>" .
                            "<img src='/wwwroot/images/products/product" . $i . ".png'>" .
                            "<div class='tocart'>" .
                            "<label>В корзину</label>" .
                            "</div>" .
                            "<span class='line'></span>" .
                            "<p>Бальзам для рук SOS восстановление</p>" .
                            "<label name='price' class='price'>720 ₽</label>" .
                            "<div class='gradient'></div>" .
                            "</a>";
                        }
                        ?>
                    </div>
                </div>
            </section>
    </section>
