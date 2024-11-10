<?php
 
 declare(strict_types = 1);

 function getTransactionFiles(): array
 {
    $files = [];

    foreach(scandir(FILES_PATH) AS $file) 
    {
        var_dump($file);
    }
 }