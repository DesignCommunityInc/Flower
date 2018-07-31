<?php echo '
<script type="text/javascript">
document.addEventListener("keyup", function (event) {
    event.preventDefault();
    if (event.keyCode === 27) {
        document.getElementById("quit").click();
    }
}); 
</script>

    <header>
            '; if (in_array("1", $header_parts)) echo '
            <section id="first_section">
                <label id="header_label">Панель 
                <span>администратора</span> 
                </label>
                <label id="header_user">
                <span>Вы вошли как</span> 
                     ' . $_SESSION['user']['name']. '
                </label>
                <label id="quit">Выйти</label>
            </section>
            '; if (in_array("2", $header_parts)) echo '
            <section id="second_section">
                <label>Меню</label>
                <span class="line"></span>
                <div class="tabs">
                    <div class="tab tab_active"><a href="#">менеджер материалов</a></div>
                    <div class="tab"><a href="#"> менеджер акций</a></div>
                    <div class="tab"><a href="#"> менеджер #3</a></div>
                    <div class="tab"><a href="#"> менеджер #4</a></div>
                </div>
            </section>
            '; if (in_array("3", $header_parts)) echo '
            <section id="third_section">
                <section class="search_wrapper">
                    <div class="search">
                        <input type="text" placeholder="" id="src_input" />
                        <div id="ripple" class="centered centered_active">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>

                        <div class="src_circle"></div>
                        <img src="/wwwroot/images/icons/src.png" class="src_img" width="38" />
                    </div>
                </section>
            </section>
            '; if (in_array("4", $header_parts)) echo '
            <section id="fourth_section">
                <div class="button" style="width: 250px">Инструменты поиска</div>
            </section>
            '; if (in_array("5", $header_parts)) echo '
            <section id="fifth_section">
                <div id="prod_settings_label" class="title_label">
                    <label>Настройки товаров</label>
                    <span class="line"></span>
                </div>
                <div id="prod_table_label" class="title_label">
                    <label>Таблица товаров</label>
                    <span class="line"></span>
                </div>
            </section>
             '; if (in_array("add", $header_parts)) echo '
            <section id="sixth_section">
                <div class="add_label title_label">
                    <label>Добавление товара</label>
                    <span class="line"></span>
                    <div class="button add_btn">Сохранить</div>
                </div>
            </section>
    </header>
    ';