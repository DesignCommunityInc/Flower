<?php
    $fill = "header_fill";

    $categories = $fill($db);

    // foreach($_categories as $cats){
    //     $id = $cats["ID"];
    //     $qq = "SELECT `ID`, `sub_name`,`category_id` FROM `sub_categories` WHERE `category_id` = '$id'";
    //     $_categories["subcat"] = $query($qq, $db);
    // };

?>
<header>
    <nav>
        <ul class="navbar_one">
            <li class="logo">
                <img src="/wwwroot/images/icons/flower_icon.png" />
                <a href="https://Flower">Flower</a>
            </li>
            <li class="meta">
                <label>
                    8-(800)-156-24-76
                </label>
                <p name="phone">Мы всегда рады вам помочь</p>
            </li>
            <li class="links">
                <ul>
                    <li>
                        <a href="https://Flower/shop/catalog/">Каталог</a>
                    </li>
                    <li>
                        <a href="#">Новости</a>
                    </li>
                    <li>
                        <a href="#">О компании</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="fixed_nav">
            <li class="categories">
                <div class="category_header">
                    <label name="maintitle">Категории</label>
                    <div class="category_open_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span name="title"></span>
                </div>
                <ul id="categories">
                    <?php
                        foreach($categories as $id => $value){
                            echo
                            "<li><label class='category'>".$value[0]."</label>".
                            "<div class='list_container'>".
                            "<label name='title'>".$value[0]."</label>".
                            "<span name='title'></span>".
                            "<ul class='list'>";
                            foreach($value["sub"] as $s){
                                echo
                                "<li><a href='".$s["ID"]."'><label>".$s["category_name"]."</label></a></li>";
                            }
                            echo
                            "</ul></div></li>";
                        }
                    ?> 
                </ul>
            </li>
            <li name="bag" id="cart">
                <img src="/wwwroot/images/icons/bag.png" width="48" />
                <div class="cart_items_counter">2</div>
            </li>
        </ul>
        <div class="list_gradient"></div>
        <div class="sub_list_gradient"></div>

        <div class="cart">
            <div class="cart_container">
                <?php
                for($i = 0; $i < 6; $i++)
                {
                    echo "<div class='product'>" .
                    "<img src='/wwwroot/images/products/product" . ($i + 1) . ".png'>" .
                    "<div class='tocart'>" .
                    "<img src='/wwwroot/images/icons/bag_white.png' width='32' />" .
                    "</div>" .
                    "<p>Бальзам для рук SOS восстановление</p>" .
                    "<label class='price'>720</label>" .
                    "</div>";
                }
                ?>
            </div>
            <div class="cart_cheque">
                <label id="summary">
                    Итого:
                    <strong>1440 рублей</strong>
                </label>
                <span></span>
                <div class="cheque">
                    <?php
                    for($i = 0; $i < 6; $i++)
                    {
                        echo "<div id='" . $i . "'>" .
                        "<p>Бальзам для рук SOS восстановление, супер-цена по акции, а также подарок при покупке</p>" .
                        "<label>720 руб.</label>" .
                        "</div>";
                    }
                    ?>
                </div>
                <input type="button" value="Перейти к оформлению" />
            </div>
        </div>
    </nav>
    <div class="borderBottom" id="borderHeader"></div>
</header>