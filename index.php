<?php
	require('conexion.php');
	
	$query="SELECT id, usuario, email FROM usuarios";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
	
	</head>
	<body>
		
		<center><h1>Usuarios</h1></center>
		
		<a href="nuevo.php">Nuevo usuario</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Usuario</b></td>
					<td><b>Email</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['usuario'];?>
							</td>
							<td>
								<?php echo $row['email'];?>
							</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" >Eliminar</a>


							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
