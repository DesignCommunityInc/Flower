<?php

$post = $_POST;
if ($post)
{
    if (isset($post["action"]))
    {
        $param = $post["action"];
        switch($param)
        {
            case "quit":
            session_destroy();
            echo "success";
            break;
        }
}
}

?>