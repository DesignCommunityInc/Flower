<?php
function db_query($string, $db)
{
     $mass = array();
     $query = $string;
                $action = mysqli_query($db, $query);

                while($item = mysqli_fetch_assoc($action)){
                    $mass[] = $item;
                }
    return $mass;
}
function db_qupdate($string, $db)
{
        $query = $string;
        $action = mysqli_query($db, $query);
}
function user_verify($db, $login, $password)
{
     $query = "SELECT `Id`, `password_hash`, `username` FROM `admins` WHERE `username` = '$login'";
        $action = mysqli_query($db, $query);
        $user = array();

        while($item = mysqli_fetch_assoc($action)){
            $user[] = $item;
        }

        if( password_verify( $password, $user[0]["password_hash"] ) == false ){
            $errors[] = "Пароль не верный!";
        }

        if (count($user) == 0){
            $errors[] = "Пользователь не найден<br>";
        };

        if(empty($errors)){
            return true;
        }
        return false;
}
function fishtext($arg = 0)
{
    $text = array();
    $text[0] = "Таким образом укрепление и развитие структуры требуют от нас анализа соответствующий условий активизации. Повседневная практика показывает, что консультация с широким активом представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако забывать, что дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. Равным образом новая модель организационной деятельности в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.";
    $text[1] = "Значимость этих проблем настолько очевидна, что рамки и место обучения кадров в значительной степени обуславливает создание соответствующий условий активизации. Разнообразный и богатый опыт сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации направлений прогрессивного развития.";
    $text[2] = "Задача организации, в особенности же начало повседневной работы по формированию позиции требуют от нас анализа форм развития. Таким образом постоянный количественный рост и сфера нашей активности позволяет оценить значение новых предложений.";
    $text[3] = "Не следует, однако забывать, что укрепление и развитие структуры позволяет выполнять важные задания по разработке направлений прогрессивного развития. Задача организации, в особенности же сложившаяся структура организации способствует подготовки и реализации существенных финансовых и административных условий. Товарищи! начало повседневной работы по формированию позиции требуют от нас анализа дальнейших направлений развития.";
    $text[4] = "С другой стороны новая модель организационной деятельности представляет собой интересный эксперимент проверки дальнейших направлений развития. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает создание форм развития. Товарищи! постоянный количественный рост и сфера нашей активности требуют от нас анализа дальнейших направлений развития. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий. Равным образом укрепление и развитие структуры требуют от нас анализа системы обучения кадров, соответствует насущным потребностям.";

    switch($arg)
    {
        case 0: return $text[$arg];break;
        case 1: return $text[$arg];break;
        case 2: return $text[$arg];break;
        case 3: return $text[$arg];break;
        case 4: return $text[$arg];break;
    }
}
?>