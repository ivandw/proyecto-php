<?php
	$titulo = "Panel de control - Alta de un nuevo registro";

        $user_name=utf8_decode($_POST["user_name"]);
		$img_id=$_POST["idimg"];
       // $user_description=utf8_decode($_POST["user_description"]);
        $user_img=$_POST["user_img"];
      //  $cat_id=$_POST["cat_id"];

 /*       $prd_foto1 = $_FILES["prd_foto1"]["name"]; // nombre del archivo 
        $prd_foto1Temp = $_FILES["prd_foto1"]["tmp_name"]; // nombre temporario
        $prd_foto2 = $_FILES["prd_foto2"]["name"];
        $prd_foto2Temp = $_FILES["prd_foto2"]["tmp_name"];       
        $dir = "imagenes/$user_name/" ;      	 
		if (!is_dir($dir)) {
		
		mkdir($dir, 0777);
		chmod($dir, 0777);
		}
		move_uploaded_file($prd_foto1Temp, $dir . $prd_foto1);
        move_uploaded_file($prd_foto2Temp, $dir . $prd_foto2);            
        $valores1 = getimagesize($dir . $prd_foto1);
        $valores2 = getimagesize($dir . $prd_foto2);

*/
        include("conexion.php");
				
        $sql="INSERT INTO registros 
                  VALUES (NULL,'$img_id','$user_name','$user_description','$user_img',NULL)";
      //  $sql2="SELECT descripcion FROM registros WHERE cod_categoria=$cat_id";
/*

            $sql="INSERT INTO productos 
                  VALUES (NULL,'".$user_name."','".$user_description."',".$user_img.", ".$cat_id.",'".$prd_alta."','".$prd_foto1."', '".$prd_foto2."')";
            $sql2="SELECT cat_nombre FROM categorias WHERE cat_id=".$cat_id;

*/

      mysqli_query($link, $sql);
 
          
     //   $resultado=mysqli_query($link,$sql2);
		
		
  //      $fila=mysqli_fetch_assoc($resultado);
	//print_r($fila);
		
        mysqli_close($link);    
?>
</head>
<body>

	<div id="nav">
	</div>
	<div id="main">

            <h1><?php echo($titulo);?>:</h1>

            <br />
            
            <table class="paneles">
                <tr>
                    <td colspan="2" class="titulo">Se ha agregado el siguiente registro:</td>
                </tr>
                <tr>
                    <td class="lista">Nombre del autor de registro</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;"><?php echo(utf8_encode($user_name)); ?></td>
                </tr>
                <tr>
                    <td class="lista">Descripci&oacute;n</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;"><?php echo(utf8_encode($img_id)); ?></td>
                </tr>
                <tr>
                    <td class="lista">imagen</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;"><?php echo($user_img); ?></td>
                </tr>
      			 <tr>
                    <td colspan="2" style="padding: 20px 0px 0px 0px; text-align:center;">
                    <input type="button" onclick="window.location='form-alta.php'" value="Agregar otro producto" class="botones"/>
                    &nbsp;
                    <input type="button" onclick="window.location='hola.html'" value="Volver al panel" class="botones"/>
                    </td>
                </tr>
            </table>

	</div>
	<div id="pie">
	</div>
	
</body>
</html>