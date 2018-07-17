<!DOCTYPE html>
<html>
<head>
    <title>Flower</title>
    <meta charset="utf-8" accesskey="makeup" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/Administrator/adm.css" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/_Layout.css" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/effects.css" />

    
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
   <script src="/wwwroot/js/Ajax.js"></script>
<script src="/wwwroot/js/Ajax - functions.js"></script>
</head>
<body>
        <section class="viewport">
            <section class="viewport_section" id="v_s_first">
                <a href="https://Flower/shop/administrator/add/product/" class="item button">Добавить</a>
            </section>
            <section class="viewport_section" id="v_s_second">
                <span class="line"></span>
                <table cellpadding="0" border="0">
                    <tr>
                        <th width="15%"><label class="">Изменить</label></th>                                
                        <th width="10%"><label class="">Статус</label></th>                                
                        <th width="35%"><label class="">Заголовок</label></th>                                
                        <th width="10%"><label class="">Артикул</label></th>                                
                        <th width="15%"><label class="">Автор</label></th>                                
                        <th width="10%"><label class="">Цена</label></th>                                
                        <th width="5%"><label class="">ID</label></th>
                    </tr>
                    <?php
                    for($i = 0; $i < 20; $i++){
                        echo '
                        <tr class="table_item">
                            <td class="button table_btn">редактировать</td>
                            <td class="state"><div class="state_circle"></div></td>
                            <td class="title">Крем для рук SOS восстановление</td>
                            <td class="article">00001</td>
                            <td class="author">#UserName</td>
                            <td class="price">720</td>
                            <td class="id">01</td>
                            </tr>';
                    }
                    ?>
                </table>
            </section>
            </section>
            <div class="pagination_wrapper">
                <label>Список страниц</label>
                <span class="line"></span>
                <div class="page_container">
                    <div class="page button">1</div>
                    <div class="page button">2</div>
                    <div class="page button">3</div>
                    <div class="page button">4</div>
                    <div class="page button">5</div>
                    <div class="page button">6</div>
                    <div class="page button">7</div>
                    <div class="page button">8</div>
                    <div class="page button">9</div>
                </div>
            </div>
   
</body>
</html>
