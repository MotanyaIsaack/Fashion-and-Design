<?php

function cLog($data)
{
    $file = "errors/errors.txt";
    $handle = fopen($file, 'w') or die('cannot oppen file');
    fwrite($handle, $data);
}
