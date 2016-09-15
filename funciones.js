
	function validacion() {

		//campos obligatorios
		var prd_nombre = document.getElementById("prd_nombre").value;
		var prd_descripcion = document.getElementById("prd_descripcion").value;
		var prd_precio = document.getElementById("prd_precio").value;


		if( prd_nombre == null || prd_nombre.length == 0 || /^\s+$/.test(prd_nombre) ) {
		    // Si no se cumple la condicion...
		    alert('[ERROR] Debe completar el campo Nombre');
		    return false;
		  }
		else if( prd_descripcion == null || prd_descripcion.length == 0 || /^\s+$/.test(prd_descripcion) ) {
		    // Si no se cumple la condicion...
		    alert('[ERROR] Debe completar el campo Descripción');
		    return false;
		  }
		else if( isNaN(parseInt(prd_precio)) ) {
		    // Si no se cumple la condicion...
		    alert('[ERROR] El campo Precio debe tener un valor numérico');
		    return false;
		  }
		else{

		  return true;
		  }
	}


	function advertencia(){
		var mensaje='Si pulsa el botón "Confirmar baja", se eliminarán los datos del producto.';
			if(confirm(mensaje)){
				return true;	
			}
			else{
				window.location="panel-productos.php";
				return false;
			}
	}

    function advertencia2(){
            var mensaje='Esta seguro que desea modificar los datos del producto?';
            if(!confirm(mensaje)){
                	window.location="panel-productos.php";
            }
            else{
                   document.forms["editar"].submit();
                }
    }	