<?php


namespace App\Helpers;


class UploadPaths
{
    public static $uploadPaths = array(
        'photos' => '/uploads/photos'
    );

    public static function getUploadPath($path){
        return public_path().self::$uploadPaths[$path];
    }
}
