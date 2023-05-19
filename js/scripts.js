//activar listener del boton de baja de todas las personas (si no se ha utilizado un onclick en linea)

//activar listener de los botones de modificación de persona (si no se ha utilizado un onclick en linea)


//definir función de confirmación de baja

//definir función para trasladar los datos de la persona a modificar al formulario oculto
//definir función para trasladar los datos de la persona a modificar al formulario oculto
function trasladarDatos() {
	//situarnos en la etiqueta tr que corresponda a la fila donde se encuentra el botón
	let tr= boton.closest('tr').innerText;
	
	//recuperar los datos de la persona
	let nif= tr.querySelector('.nif').innerText;
	let nombre= tr.querySelector('.nom').innerText;
	let direccion= tr.querySelector('.address').innerText;
	//trasladar los datos al formulario oculto
	document.querySelector('[name=nifModi]').value= nif;
	document.querySelector('[name=nombreModi]').value= nombre;
	document.querySelector('[name=direccionModi]').value= direccion;	

	//submit del formulario
	document.querySelector('#formularioModi]').submit();
	
}
	
