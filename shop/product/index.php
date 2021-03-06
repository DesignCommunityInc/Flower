<?php
    $root = "../../";
    require_once($root . "templates/queries/manager.php"); 
    require_once($root . "templates/layout.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" accesskey="makeup" />
    <title>Flower</title>
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/product/viewport.css">
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/viewport.css">
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/custom_select.css">
    <script src="/wwwroot/js/CustomSelect.js"></script>
    <script src="/wwwroot/js/ProductScript.js"></script>
    <?php
    $url = "https://vk.com/doc103959133_469378964?hash=9ca351008bffbf2a22&dl=f53832525e489cc483";
    $title = "Flower – интернет магазин";
    $description = "Бальзам для рук SOS восстановление";
    $title = "Flower – интернет магазин";
    $image = $root . "wwwroot/images/products/product1.png";
    echo '
    <meta property="og:url" content=' . $url . '>
    <meta property="og:title" content=' . $title . '>
    <meta property="og:description" content=' . $description . '>
    <meta property="og:image" content=' . $image . '>';

    ?>

</head>
<body>
    <?php
    require $root . "templates/page_parts/header.php";
    ?>
    <section class="main_viewport">
        <div class="header">
            <div class="header_section" id="prod_meta">
                <label name="title">Бальзам для рук SOS восстановление</label>
                <div class='rate_block'>
                    <div class='rate_star star_selected'> </div> 
                    <div class='rate_star star_selected'> </div> 
                    <div class='rate_star star_selected'> </div> 
                    <div class='rate_star'> </div>
                    <div class='rate_star'> </div> 
                </div>
                <div class="clients_number">2781</div>
            </div>
            <div class="header_section" id="prod_price">
                <label>720</label>
                <p>1210</p>
            </div>
        </div>
        <div class="content">
            <div class="image_section">
                <img src="/wwwroot/images/products/product1.png"/>
                <img src="/wwwroot/images/products/product2.png"/>
                <img src="/wwwroot/images/products/product3.png"/>
                <img src="/wwwroot/images/products/product4.png"/>
                <img class="selected_image" src="/wwwroot/images/products/product4.png"/>
            </div>
            <div class="meta_section">
                <div class="meta_item add_tocart">
                    <div class="count">
                        <label>Количество</label>
                        <div class="custom-select" style="width:60px;">
                            <select>
                            <option value="1">1</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                            <option value="6">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="add_tocart_btn button">В корзину</div>
                </div>
                <div class="meta_item shares">
                    <label>Поделиться</label>
                    <span></span>
                    <?php
                    echo "<a class='share' href=http://vk.com/share.php?url=" . $url . "&title=" . $title . "&description=" . $description . "&image=" . $image . "&noparse=true>
                            <img src='/wwwroot/images/icons/sc_icons/vk.png' width='28'/>
                        </a>";
                    echo "<a class='share' href=https://www.facebook.com/sharer/sharer.php?u=" . $url . ">
                            <img src='/wwwroot/images/icons/sc_icons/fc.png' width='28'/>
                        </a>";
                    echo "<a class='share' href=https://twitter.com/share?url=" . $url . "&text=" . $title . ">
                            <img src='/wwwroot/images/icons/sc_icons/tw.png' width='28'/>
                        </a>";

                    ?>
                </div>
            </div>
        </div>
        <div class="info_section first_tabselected">
            <div class="tab_wrapper">
                <label id="1">Описание</label>
                <label id="2">Состав</label>
                <label id="3">Отзывы</label>
            </div>
            <span class="first_tabselected"></span>
            <div class="info_wrapper">
                <div id="desc">
                   <p>
                       <?php
                       $fishtext = 'fishtext';
                       echo fishtext(0);
                       echo fishtext(1);
                       echo fishtext(2);
                       ?>
                   </p>
                </div>
                 <div id="composition">
                   <p>
                       <?php
                       $fishtext = 'fishtext';
                       echo fishtext(2);
                       echo fishtext(3);
                       echo fishtext(4);
                       ?>
                   </p>
                </div>
                 <div id="comments">
                   <p>
                       <?php
                       $fishtext = 'fishtext';
                       echo fishtext(1);
                       echo fishtext(3);
                       echo fishtext(0);
                       ?>
                   </p>
                </div>
            </div>
        </div>
    </section>
      <section class="main_container">
         <section class="viewport">
                <div class="interest">
                </div>
                <div class="content_wrapper" id="news">
                        <div class="header">
                            <label class="view_label offer_label">Вас может заинтересовать</label>
                            <span class="line"></span>
                         </div>
                        <div class="body">
                            <?php
                            for($i = 0; $i < 8; $i++)
                            {
                                echo
                                "<div class='product'>" .
                                "<img src='/wwwroot/images/products/product" . $i . ".png'>" .
                                "<div class='tocart'>" .
                                "<label>В корзину</label>" .
                                "</div>" .
                                "<span class='line'></span>" .
                                "<p>Бальзам для рук SOS восстановление</p>" .
                                "<label name='price' class='price' attr-data='" . ($i + 5) * 150 . "'>720</label>" .
                                "<a href='https://Flower/shop/product/?id=" . $product["ID"] . "'  class='ref'></a>" .
                                "</div>";
                            }
                            ?>
                    </div>
                </div>
             </section>
          </section>
    <?php
    include $root . "templates/page_parts/footer.php";
    ?>

<div class="up"><p>up</p></div>
</body>
</html>
