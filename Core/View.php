<?php

namespace Core;

class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $header = "../Templates/Vue/header.php";
        $file = "../App/Views/$view";
        $footer = "../Templates/Vue/footer.php";

        require $header;

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
        
        require $footer;        
    }
}
