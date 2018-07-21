<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/header.css">
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/_Layout.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script src="/wwwroot/js/MainScript.js"></script>
</head>
<style>
    ::-webkit-scrollbar {
        width: 5px;
    }
    
    ::-webkit-scrollbar-track {
        background: var(--color-primaryLight);
        background-clip: content-box;
    }
    
    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: var(--color-primary);
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.2); 
    }
</style>
<body>
<div class="cart">
    <div class="left_cart"><</div>
    <div class="right_cart">></div>
            <div class="cart_container">
                <?php
                for($i = 0; $i < 11; $i++)
                {
                    echo "<div class='product'>" .
                    "<img src='/wwwroot/images/products/product" . ($i + 1) . ".png'>" .
                    "<div class='tocart'>" .
                    "<label>удалить из корзины</label>" .
                    "</div>" .
                    "<p>Бальзам для рук SOS восстановление</p>" .
                    "<label class='price'>720</label>" .
                    "<div class='gradient'></div>" .
                    "</div>";
                }
                ?>
            </div>
            <div class="cart_cheque">
                <label id="summary">
                    7
                </label>
                <div class="cheque">
                    <?php
                    for($i = 0; $i < 10; $i++)
                    {
                        echo "<div attr-data='" . ($i + 1) . "'>" .
                        "<p>Бальзам для рук SOS восстановление</p>" .
                        "<label>1200</label>" .
                        "</div>";
                    }
                    ?>
                </div>
                <input type="button" value="Перейти к оформлению" />
            </div>
        <!-- <div class="list_gradient"></div> -->
        </div>
</body>
</html>
