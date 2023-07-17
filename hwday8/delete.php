<?php

require_once 'pdo.php';

class Helper
{
    public static function delete($data)
    {
        $DB_TYPE = 'mysql';
        $DB_HOST = 'localhost';
        $DB_NAME = 'test';
        $USER = 'root';
        $PW = '';

        $database = new Database($DB_TYPE, $DB_HOST, $DB_NAME, $USER, $PW);
        $database->delete($data);
    }

    public static function redirectHome()
    {
        header("Location: index.php");
        exit;
    }
}

$database = new Database($DB_TYPE, $DB_HOST, $DB_NAME, $USER, $PW);

if ($_POST['id'] > 0 && is_numeric($_POST['id'])) {
    Helper::delete(['id' => $_POST['id']]);
}

Helper::redirectHome();
