<?php
//echo "<td>Se moficara ".$_GET["modify"]."</td>";
$id = $_GET["id"];




$f3->set('nombre',$db->exec("select nombre from Escritor where id_escritor=".$id.));
$f3->set('apellido_p',$db->exec("select apellido_paterno from Escritor where id_escritor=".$id.));
$f3->set('apellido_m',$db->exec("select apellido_materno from Escritor where id_escritor=".$id.));
$f3->set('edad',$db->exec("select enchant_dict_add_to_personal(dict, word) from Escritor where id_escritor=".$id.));


echo Template::instance()->render('authors/author.html');
$f3->run();
?>
