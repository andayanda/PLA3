<?php
	session_start();
	// session_destroy();

		//inicialización de variables y constantes
		
		//array para guardar las personas
		// $personas [''];
		//si existe la variable de sesión substituyo el contenido del array
		$personas=$_SESSION ['personas'] ?? [];
// if(isset($_SESSION['datos'])) extract($_SESSION['datos']); con servicio
		//Alta de persona
		if (isset($_POST['alta'])){

		//recuperar los datos sin espacios en blanco -trim()-
		$nif= trim($_POST['nif']);
		$nom= trim($_POST['nombre']);
		$addr= trim($_POST['direccion']);
	try{

		//validar datos obligatorios
		$errors='';
		if (empty($nif)) {
			$errors .= "Nif obligatori<br>";
		}
		if (empty($nom)) {
            $errors.= "Nom obligatori<br>";
        }
		if (empty($addr)) {
            $errors.= "Adreça obligatoria<br>";
		}

		if (!empty ($errors)) {
			throw new Exception($errors);			
		}
		//validar que el nif no exista en el array
		if (array_key_exists($nif, $personas)){
			throw new Exception("El Nif $nif ya existe");
		}

		//convertimos el nombre y dirección en minúsculas con la primera letra en mayúsculas (opcional)
		//guardar la persona en el array. 3 dimensiones
		//				1		2		3
		$personas [$nif] ['nombre']=$nom;
		$personas [$nif] ['direccion']=$addr;

		//mensaje de alta efectuada
		$mensajes= 'Alta efectuada';

		//limpiar el formulario
		$nif =$nom =$addr = null;

	}
 		catch (Exception $error) {
	$mensajes = $error ->getMessage();
	} };
	//BAJA DE TODAS LAS PERSONAS

		//inicializar el array
		if (isset($_POST['baja'])){
			$personas =[];}			
		
	//BAJA DE LA PERSONA SELECCIONADA EN LA TABLA
	
		//recuperar el nif
		
		//validar nif informado

		//validar que el nif existe en el array

		//borrar la fila del array	

		//mensaje de baja efectuada

	//MODIFICACION DE LA PERSONA SELECCIONADA
	
		//recuperar los datos sin espacios en blanco -trim()-

		//validar datos
			
		//validar que el nif no exista en el array

		//guardamos el nombre y dirección en minúsculas con la primera letra en mayúsculas (opcional)
			
		//modificar la persona en el array
			
		//mensaje de modificación efectuada

	//CONSULTA DE PERSONAS:

		//ordenar el array por nif

		//confeccionar las filas de la tabla de consulta
	
	//volcar el contenido del array en la variable de sesión

$_SESSION ['personas']=$personas;
// con servicio altapersona.php
// $_SESSION['datos']=compact('nif','nom','addr','mensajes')
?>
<html>
<head>
	<title>PLA03</title>
	<meta charset='UTF-8'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<main>
		<h1 class='centrar'>PLA03: MANTENIMIENTO PERSONAS</h1>
		<br>
		<!-- con servicio action='altapersona.php' -->
		<form method='post' action='#'> 
			
		  <div class="row mb-3">
		    <label for="nif" class="col-sm-2 col-form-label" value= "<?php echo $nif ?? null; ?>";>Nif</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nif" name='nif'>
		    </div>
		  </div>
		  <div class="row mb-3">
		    <label for="nombre" class="col-sm-2 col-form-label" >Nombre</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nombre" name="nombre" value= "<?php echo $nom ?? null; ?>">
		    </div>
		  </div>
		  <div class="row mb-3">
		    <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="direccion" name="direccion" value= "<?php echo $addr ?? null; ?>">
		    </div>
		  </div>
		  <label for="nombre" class="col-sm-2 col-form-label"></label>
		  <button type="submit" class="btn btn-success" name='alta'>Alta persona</button>
		  <br>
		  <span><?php echo $mensajes ?? null; ?></span>
		</form><br>

		<table class="table table-striped">
			<tr class='table-dark'><th scope="col">NIF</th><th scope="col">Nombre</th><th scope="col">Dirección</th><th scope="col"></th></tr>
			<?=$filasTabla?>
			<!--tr>
		      <td>40000000A</td>
		      <td><input type='text' value='O-Ren Ishii' class='nombre'></td>
		      <td><input type='text' value='Graveyard avenue, 66' class='direccion'></td>
		      <td>
		      	<form method='post' action='#'>
		      		<input type='hidden' name='nifBaja' value='40000000A'>
		      		<button type="submit" class="btn btn-warning" name='bajaPersona'>Baja</button>
		      	</form>
		      	<button type="button" class="btn btn-primary" name='modiPersona'>Modificar</button>
		      </td>
		    </tr-->
		</table>

		<form method='post' action='#' id='formularioBaja'>
			<input type='hidden' id='baja' name='baja'></input>
			<button type="submit" class="btn btn-danger" id='' name='baja'>Baja personas</button>
		</form>

		<!--FORMULARIO OCULTO PARA LA MODIFICACION-->
		<form method='post' action='#' id='formularioModi'>
			<input type='hidden' name='nifModi'>
			<input type='hidden' name='nombreModi'>
			<input type='hidden' name="direccionModi">
			<input type='hidden' name='modificar'>
		</form>
	</main>

	<script type="text/javascript" src='js/scripts.js'></script>
</body>
</html>
<?php
echo "<pre>";
	print_r ($_SESSION ['personas']);
echo "</pre>";
?>