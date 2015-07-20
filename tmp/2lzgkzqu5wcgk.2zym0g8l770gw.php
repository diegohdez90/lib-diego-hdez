
<?php foreach (($result?:array()) as $item): ?>
	<tr>    
    <td id="<?php echo $item['nombre']; ?>" data-toggle="modal" data-target="#<?php echo $item['nombre']; ?>modal">
  <?php echo $item['nombre']; ?>
    <?php echo $item['apellido_paterno']; ?></a></td>
    <td><?php echo $item['Libros']; ?></td>
    <td>
    	<form method='post' action='eliminar.php'><input type='hidden' name='id' value='<?php echo $item['id_Escritor']; ?>'/><input type='submit' value='Eliminar'/></form>

    	<form method='post' action='modificar.php'><input type='hidden' name='id' value='<?php echo $item['id_Escritor']; ?>'/><input type='submit' value='Modificar'/></form>
    </td>
    </tr>
<?php endforeach; ?>





<script type="text/javascript">
	$(".container").append("<div class='titulos<?php echo $item['nombre']; ?>'></div>");
	
	$("#<?php echo $item['nombre']; ?>").click(function(){
		$(".titulos<?php echo $item['nombre']; ?>").fadeIn();
		$(".<?php echo $item['nombre']; ?>table").append().html("../authors/titulos.html");
		$(".authors").fadeOut("slow");
	});

	$(".titulos<?php echo $item['nombre']; ?>").click(function(){
		$(".titulos<?php echo $item['nombre']; ?>").fadeOut("slow");
		$(".authors").fadeIn("slow");
	});

</script>
