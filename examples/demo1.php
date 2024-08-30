<?php

    use Coco\mcrypt\Mcrypt;

    require '../vendor/autoload.php';

    $string = '中文字符abc123';
    $key    = 'keykey';

    $result = Mcrypt::encode($string, $key, 60);

    echo $result;

    echo PHP_EOL;

    echo Mcrypt::decode($result, $key);
