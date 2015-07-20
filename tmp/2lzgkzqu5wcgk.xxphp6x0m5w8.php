
<link rel="stylesheet" type="text/css" href="css/style.css">
<table><th>Nombre</th><th>Libros</th>

<?php foreach (($result?:array()) as $item): ?>
	<tr>    
    <td><?php echo $item['nombre']; ?>
    <?php echo $item['apellido_paterno']; ?></td>
    <td><?php echo $item['Libros']; ?></td>
    </tr>
<?php endforeach; ?>

</table>