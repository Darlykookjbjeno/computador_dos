<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IMAGEN</title>
</head>
<body>
	<table >
		<thead>
			<tr>
				<tr>
					<a href="index.php"></a>
				</tr>
				<th>id_imagen</th>
				<th>nombre</th>
				<th>Producto</th>
				<th>imagen</th><th>
					
			</tr>
		</thead>
		<tbody>
			
	
		<?php 
			include("conexion.php");
			$query= "SELECT * FROM imagenesproductos";
			$resultado=$conexion->query($query);
			while($row =$resultado->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['id_imagenesp']; ?>	</td>
					<td> <?php echo $row['nombreimagen'];?></td>
					<td><?php echo $row['id_productos'];?></td>
				    <td>	<img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>" style="width: 20px;"/></td>
				 
					<th> <a href="a" >editar</a></th>
					<th> <a href="a" >eliminar</a></th>
				</tr>
				<?php
				
			}
		?>
			</tbody>
	</table>

</body>
</html>