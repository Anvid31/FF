<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/estilo.css">
  <link rel="stylesheet" href="/css/es.css">
  <title>Document</title>
</head>
<body>
  


<div>
			<a class="btn btn-success" href="../views/newrestaur.php">
      <i class="fa fa-plus"></i> </a>
       </a>

		</div>
		<br>




           <br>


			</form>
 
      <table class="table table-striped table-light" id= "table_id">

                   
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>nit</th>
                        <th>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost","root","","r_user");               
$SQL="SELECT restaurant.id,restaurant.nombre,restaurant.nit FROM restaurant";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>

<tr>

<td> <?php echo $fila['id']; ?>     </td>
<td> <?php echo $fila['nombre']; ?> </td>
<td> <?php echo $fila['nit']; ?>    </td>




//<td>


  <a class="btn btn-warning" href="editar_user.php id=<?php echo $fila['id']?> "> 
  <i class="fa fa-edit"></i> </a>

  <a class="btn btn-danger" href="eliminar_user.php id=<?php echo $fila['id']?>">
  <i class="fa fa-trash"></i></a>

</td>


</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>


	</body>
  </table>

</html>