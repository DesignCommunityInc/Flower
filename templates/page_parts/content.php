<section class="main_container">
        <!-- VIEWPORT -->
        <section class="viewport">
            <div class="content_wrapper" id="content">
                <div class="header">
                    <label class="view_label content_label">Краска для бровей и ресниц</label>
                    <span class="line"></span>
                    <div class="button filter_btn">Фильтры</div>
                    <div class="rate_container">
                        <div class='rate_block'>
                            <div class='rate_star star_selected'> </div>
                            <div class='rate_star star_selected'> </div>
                            <div class='rate_star star_selected'> </div>
                            <div class='rate_star'> </div>
                            <div class='rate_star'> </div>
                        </div>
                    </div>
                </div>
                <div class="body filters"> 
                    <?php 
                    for($i = 0; $i < 5; $i++){
                    if($i % 2 == 0){
                        echo '
                        <div class="filter_item">
                            <div class="filter_header">
                                <label>Бренд</label>
                            </div>
                            <div class="filter_body non_selected"> 
                                    <label class="filter_radio_active">faberlic</label>
                                    <label>oriflame</label>
                                    <label>faberlic</label>
                                    <label>oriflame</label>
                            </div>
                            <label class="filter_show_more non_selected">раскрыть список<label>
                        </div>';
                    }
                    else {
                        echo '
                        <div class="filter_item">
                            <div class="filter_header">
                                <label>Стоимость</label>
                            </div>
                            <div class="filter_body non_selected"> 
                                    <label class="filter_radio_active">от 150</label>
                                    <label>от 350</label>
                                    <label>от 800</label>
                                    <label>от 1500</label>
                                    <label>от 2500</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                                    <label>от 5000</label>
                            </div>
                            <label class="filter_show_more non_selected">раскрыть список<label>
                        </div>';
                    }
                    }
                    ?>
                </div>
                <div class="header">
                    <label class="view_label content_prod_label">Продукция</label>
                    <span class="line"></span>
                </div>
                <div class="body">
                    <?php
                    foreach($content as $product)
                    {
                        echo
                        "<div class='product'>" .
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
        </section>
    </section>