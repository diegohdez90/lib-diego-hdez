<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<?php

$f3=require('lib/base.php');

$f3->route('GET /',
    function() {
    }
);

$db=new DB\SQL(
    'mysql:host=localhost;dbname=Library',
    'root',
    'mysql'
);

echo "<header><h1 class='text-center'>Autores</h1></header>";
echo "<div class='container center-block'><div class='col-md-12'>";
echo "<table class='table-responsive authors'><th>Nombre</th><th>Libros</th><th>Opciones</th>";
$f3->set('result',$db->exec("select id_escritor, nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=1 and nombre='Diego' and apellido_paterno= 'Hernandez'"));
echo Template::instance()->render('authors/authors.html');
$f3->set('result',$db->exec("select nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=2 and nombre='Raul' and apellido_paterno= 'Rojas'"));
echo Template::instance()->render('authors/authors.html');
$f3->set('result',$db->exec("select nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=3 and nombre='Roberto' and apellido_paterno= 'Huerta'"));
echo Template::instance()->render('authors/authors.html');
$f3->set('result',$db->exec("select nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=4 and nombre='Karla' and apellido_paterno= 'Dominguez'"));
echo Template::instance()->render('authors/authors.html');
$f3->set('result',$db->exec("select nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=5 and nombre='Valeria' and apellido_paterno= 'Mejia'"));
echo Template::instance()->render('authors/authors.html');
$f3->set('result',$db->exec("select nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=6 and nombre='Anahi' and apellido_paterno= 'Ramirez'"));
echo Template::instance()->render('authors/authors.html');
$f3->set('result',$db->exec("select nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=7 and nombre='Fany' and apellido_paterno= 'Ramos'"));
echo Template::instance()->render('authors/authors.html');
$f3->set('result',$db->exec("select nombre, apellido_paterno, apellido_materno, edad, count(*) as Libros from Escritor, Libro where Escritor_id_escritor=7 and nombre='Angeles' and apellido_paterno= 'Juarez'"));
echo Template::instance()->render('authors/authors.html');


echo "</table>";
echo "</div>";


echo "<div class='titulosDiego' style='display:none;'>";
echo "<h2>Titulos Diego</h2>";

echo "<table class='table-responsive '><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=1 and nombre='Diego' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";

echo "</div>";




echo "<div class='titulosRaul' style='display:none;'>";
echo "<h2>Titulos Raul</h2>";

echo "<table class='table-responsive'><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=2 and nombre='Raul' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";
echo "</div>";

echo "<div class='titulosRoberto' style='display:none;'>";
echo "<h2>Titulos Roberto</h2>";

echo "<table class='table-responsive '><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=3 and nombre='Roberto' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";

echo "</div>";

echo "<div class='titulosKarla' style='display:none;'>";
echo "<h2>Titulos Karla</h2>";

echo "<table class='table-responsive '><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=4 and nombre='Karla' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";

echo "</div>";


echo "<div class='titulosValeria' style='display:none;'>";
echo "<h2>Titulos Anahi</h2>";

echo "<table class='table-responsive '><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=5 and nombre='Valeria' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";

echo "</div>";


echo "<div class='titulosAnahi' style='display:none;'>";
echo "<h2>Titulos Anahi</h2>";

echo "<table class='table-responsive '><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=6 and nombre='Anahi' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";

echo "</div>";



echo "<div class='titulosFany' style='display:none;'>";
echo "<h2>Titulos Fany</h2>";

echo "<table class='table-responsive '><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=7 and nombre='Fany' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";

echo "</div>";

echo "<div class='titulosAngeles' style='display:none;'>";
echo "<h2>Titulos Angeles</h2>";

echo "<table class='table-responsive '><th>Nombre</th><th>Libros</th><th>Numero de Paginas</th><th>Opciones</th>";
$f3->set("result",$db->exec("select titulo, genero, NoPaginas from libro,escritor where Escritor_id_escritor=8 and nombre='Angeles' order by titulo;"));
echo Template::instance()->render("authors/titulos.html");

echo "</table>";

echo "</div>";



echo "</div></div>";


$f3->run();


?>
