<?php

class RedirectHelper
{
    public static function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    public static function redirectHome()
    {
        self::redirect('index.php');
    }
}

RedirectHelper::redirectHome();

