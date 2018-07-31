<div id="page-preloader"><span class="spinner"></span></div>

<?php

    $c_fill = "header_fill";
    $categories = $c_fill($db);

    $b_fill = "brands_fill";
    $brands = $b_fill($db);

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
            <a href="//Flower/">
                <img src="/wwwroot/images/icons/flower_icon.png" />
                <label>Flower</label>
            </a>
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
                        <a href="/catalog/">Каталог</a>
                    </li>
                    <li>
                        <a href="/content/">Косметика</a>
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
                    <label name="maintitle" class="non_selected">Категории</label>
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
                                "<li><a href='/content/?=".$s["ID"]."'><label>".$s["category_name"]."</label></a></li>";
                            }
                            echo
                            "</ul></div></li>";
                        }
                    ?> 
                </ul>
            </li>
            <li class="brends">
                <div class="brends_header">
                    <label name="maintitle" class="non_selected">Бренды</label>
                    <div class="brend_open_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span name="title"></span>
                </div>
                <ul id="brend">
                    <?php
                        foreach($brands as $value){
                            echo
                            // var_dump($value);
                            "<li><label class='brend'>".$value["name"]."</label>".
                            "<div class='list_container'>";
                            // "<label name='title'>".$value["name"]."</label>".
                            // "<span name='title'></span></div></li>";
                        }
                    ?> 
                </ul>
            </li>   
            <li class="search_wrapper">
                <div class="search">
                    <input type="text" placeholder="" id="src_input" onkeydown="src_uniKeyCode(event)" onBlur="src_onBlur()"/>
                    <div id="ripple" class="centered">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>

                    <div class="src_circle">
                        <img src="/wwwroot/images/icons/src.png" class="src_img" width="20" />
                    </div>

                </div>
          </li>
            <li name="bag" id="cart" class="non_selected">
                <img src="/wwwroot/images/icons/bag.png" width="48" />
                <div class="cart_items_counter">2</div>
                <div class="total_price">2 170</div>
            </li>
        </ul>
        <?php require_once("cart.php");?>
        <div class="notification_wrapper">
            <!-- <div class="notification">
                <p>Добавлено</p>
                <img src="/wwwroot/images/products/product1.png"/>
                <label>Бальзам для рук SOS...</label>
                <a href="/product/?=sos">Перейти к продукту</a>
            </div>
            <div class="notification">
                <p>Добавлено</p>
                <img src="/wwwroot/images/products/product2.png"/>
                <label>Бальзам для рук SOS...</label>
                <a href="/product/?=sos">Перейти к продукту</a>
            </div> -->
        </div>
    </nav>
    <!-- <div class="borderBottom" id="borderHeader"></div> -->
</header>