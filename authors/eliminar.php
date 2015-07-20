<?php
//echo "Se elimnara ".$_GET["modify"];

$f3=require('../lib/base.php');

$f3->route('GET /',
    function() {
    }
);

$db=new DB\SQL(
    'mysql:host=localhost;dbname=Library',
    'root',
    'mysql'
);



$id = $_GET["id"];


$f3->set('result',$db->exec("delete from Escritor where id_escritor=".$id.));
echo Template::instance()->render('../authors/authors.html');


$f3->run();


?>
