<?php foreach (($result?:array()) as $item): ?>
	<tr>    
    <td id="<?php echo $item['titulo']; ?><?php echo $item['nombre']; ?>">
    	<?php echo $item['titulo']; ?></td>
    <td id="<?php echo $item['genero']; ?><?php echo $item['nombre']; ?>"><?php echo $item['genero']; ?></td>
    <td><?php echo $item['NoPaginas']; ?></td>
    <td><span id=" delete<?php echo $item['titulo']; ?><?php echo $item['name']; ?>">Eliminar</span>
    <span id=" delete<?php echo $item['titulo']; ?><?php echo $item['name']; ?>">Modificar<span></td>
    </tr>
<?php endforeach; ?>
