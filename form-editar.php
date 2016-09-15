<?php
        $prd_id=$_GET["id"];
        include("conexion.php");
		        $sql="SELECT * from productos
              WHERE cod_producto=$prd_id";
			          $resultado=mysqli_query($link,$sql);
        $fila=mysqli_fetch_assoc($resultado); 
		
	$sql2="SELECT cod_categoria, descripcion from categorias where cod_categoria =$fila[cod_categoria]";
	$res=mysqli_query ($link,$sql2);
	$fila1=mysqli_fetch_assoc($res);
print_r($res);
		
?>
        <form id="editar" action="editar.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="prd_id" name="prd_id" value="<?php echo($prd_id); ?>" />
            <table class="paneles">
                <tr>
                    <td colspan="2" class="lista">Se eliminar&aacute; el siguiente registro:</td>
                </tr>
                <tr>
                    <td class="lista">Nombre</td>
                    <td style="text-align:center;"><input type="text" id="prd_nombre" name="prd_nombre" class="campos" value="<?php echo($fila["nombre"]); ?>"/></td>
                </tr>
                <tr>
                    <td class="lista">Descripci&oacute;n</td>
                    <td style="text-align:center;"><textarea id="prd_descripcion" name="prd_descripcion" rows="6" class="campos"><?php echo ($fila1['descripcion']); ?> </textarea></td>
                </tr>
                <tr>
                    <td class="lista">Precio</td>
                    <td style="text-align:center;"><input type="text" id="prd_precio" name="prd_precio" class="campos" value="<?php echo($fila["precio"]); ?>"/></td>
                </tr>
                <tr>
                    <td class="lista">Categor&iacute;a</td>
                    <td style="text-align:center;">
                        <select name="cat_id" id="cat_id" class="campos" >
                            <?php 
							
                            $sql2="SELECT * FROM categorias";
                            $resultado2=mysqli_query($link, $sql2);
                            while($fila2=mysqli_fetch_array($resultado2)){ 
                                if($fila2["cod_categoria"]==$fila["cod_categoria"]){
                              echo  "<option selected='selected' value='<?php echo ($fila1['cod_categoria']); ?>'><?php echo ($fila1['descripcion']); ?></option>"
                                     }
									 else { <?php
                               echo "<option value='<?php echo($fila2['cat_id']); ?>'><?php echo($fila2['descripcion']); ?></option>"
                                } } 
                                mysql_close(); ?>
                          
                                
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="lista">Imagen en miniatura</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;"><img src="imagenes/<?php echo($fila["nombre"])."/".($fila["foto1"]); ?>" alt="<?php echo(utf8_encode($fila["nombre"])); ?>"/></td>
                </tr>           
                <tr>
                    <td class="lista2">Imagen miniatura</td>
                    <td style="text-align:center;"><input type="file" id="prd_foto1" name="prd_foto1" class="campos" /></td>
                </tr>
                <tr>
                    <td class="lista2">Imagen ampliada</td>
                    <td style="text-align:center;"><input type="file" id="prd_foto2" name="prd_foto2" class="campos" /></td>
                </tr>
                <tr>
                    <td style="text-align:center; padding: 20px 0px 0px 0px;" colspan="2">
                        <input type="button" onclick="advertencia2()" value="Modificar producto" class="botones" />
                        &nbsp;
                        <input type="button" value="Restablecer" class="botones" onclick="window.location='form-editar.php?prd_id=ZZZZZZZZZZZZZZZZZZZZZZ'"/>
                    </td>
                </tr>
            </table>
        </form>

    <script type="text/javascript" src="funciones.js"></script>	
