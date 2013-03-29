<?php

//if(!$_POST['page']) die("0");

$page = str_replace("#", "", $_POST['page']);

if(file_exists('paginas/'.$page.'.html'))
echo file_get_contents('paginas/'.$page.'.html');

else echo 'NO EXISTE ESA PÁGINA';
?>
