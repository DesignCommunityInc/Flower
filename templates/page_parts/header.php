
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
                    <li>
                        <label class="category">Восковая депиляция</label>
                        <div class="list_container">
                            <label name="title">Восковая депиляция</label>
                            <span name="title"></span>
                            <ul class="list">
                                <li>
                                    <a href="#">
                                        <label>Депиляция</label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="category">Шугаринг</label>
                        <div class="list_container">
                            <label name="title">Шугаринг</label>
                            <span name="title"></span>
                            <ul class="list">
                                <li>
                                    <a href="#">
                                        <label>Паста для шугаринга</label>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <label>Средства до и после шугаринга</label>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <label>Аксессуары для шугаринга</label>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <label>Дополнительный уход</label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="category">Электро и фотоэпиляция</label>
                        <div class="list_container">
                            <label name="title">Электро и фотоэпиляция</label>
                            <span name="title"></span>
                            <ul class="list">
                                <li>
                                    <label>Электроэпиляция</label>
                                </li>
                                <li>
                                    <label>Фотоэпиляция</label>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="category">Наращивание ресниц</label>
                        <div class="list_container">
                            <label name="title">Наращивание ресниц</label>
                            <span name="title"></span>
                            <ul class="list">
                                <li>
                                    <label>Ресницы</label>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="category">Косметика для лица</label>
                        <div class="list_container">
                            <label name="title">Косметика для лица</label>
                            <span name="title"></span>
                            <ul class="list">
                                <li>
                                    <label>Косметика для лица</label>
                                </li>
                            </ul>
                        </div>
                    </li>

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