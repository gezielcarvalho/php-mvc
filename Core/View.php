<?php

namespace Core;

class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $template = "VueHyper"; // Bootstrap, Vue, VueHyper
        $template_folder = "../Templates/$template";

        //files to require
        $header = "$template_folder/header.php";
        $file = "../App/Views/$view";
        $footer = "$template_folder/footer.php";

        require $header;

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }

        require $footer;        
    }
}
