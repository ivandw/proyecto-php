	<?php
include "conexion.php";
$sqlalta="SELECT id, alerta from tipomensaje";
$resultado=mysqli_query ($link,$sqlalta);
	?>

            <form action="alta.php" method="post" enctype="multipart/form-data" onsubmit="return validacion()">
                <table class="paneles">
                    <tr>
                        <td class="lista2">Nombre</td>
                        <td style="text-align:center;"><textarea type="text" id="user_name" name="user_name" class="campos" ></textarea></td>
                    </tr>
                    <tr>
                        <td class="lista2">imagen id</td>
                        <td style="text-align:center;"><input id="idimg" name="idimg" rows="6" class="campos"></td>
                    </tr>
                    <tr>
                        <td class="lista2">imagen</td>
                        <td style="text-align:center;"><input type="text" id="user_img" name="user_img" class="campos" /></td>
                    </tr>
			             <tr>
       <!--                 <td class="lista2">Categor&iacute;a</td>
                        <td style="text-align:center;">
                                        <select name="cat_id" id="cat_id" class="campos" >
										  
											
												
							
                                       </select>
                        </td> -->
						
                    </tr>
                    <tr>
                        <td class="lista2">Imagen miniatura</td>
                        <td style="text-align:center;"><input type="file" id="prd_foto1" name="prd_foto1" class="campos" /></td>
                    </tr>
               <!--     <tr>
                        <td class="lista2">Imagen ampliada</td>
                        <td style="text-align:center;"><input type="file" id="prd_foto2" name="prd_foto2" class="campos" /></td>
                    </tr> -->
					
                    <tr><td style="text-align:center; padding: 20px 0px 0px 0px;" colspan="2">
                        <input type="submit" value="Agregar" class="botones" />
                        &nbsp;
                        <input type="reset" value="Restablecer" class="botones" />
                        </td>
                    </tr>
                </table>
            </form>	

	
    <script type="text/javascript" src="funciones.js"></script>	
