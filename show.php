<?php

if(is_file('data.txt')){
    $file=fopen("data.txt","r");

    echo fread($file,200);

    fclose($file);

    echo '<br>';
    echo filesize('data.txt');

}
else{
    echo "fayl yoxdu";
}


?>