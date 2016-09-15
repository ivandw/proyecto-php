
            <table class="paneles">
                <tr>
                    <td colspan="3" class="titulo">Se ha modificado el producto de la siguiente manera:</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #b8d0ff;"></td>
                    <td style="text-align:center; border-bottom:1px solid #b8d0ff; font-weight:bold;">Anterior</td>
                    <td style="text-align:center; border-bottom:1px solid #b8d0ff; font-weight:bold;">Nuevo</td>
                </tr>
                <tr>
                    <td class="lista" style="padding-right:15px;">Nombre</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                </tr>
                <tr>
                    <td class="lista" style="padding-right:15px;">Descripci&oacute;n</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                </tr>
                <tr>
                    <td class="lista" style="padding-right:15px;">Precio</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                </tr>
                <tr>
                    <td class="lista" style="padding-right:15px;">Categor&iacute;a</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">ZZZZZZZZZZZZZ</td>
                </tr>
        <?php
            if( $foto1 != "" && $foto2 != "" ){   
        ?>             
                <tr>
                    <td class="lista">Imagen miniatura</td>
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">
                        <img src="ZZZZZZZZZZZZZ" alt="ZZZZZZZZZZZZZ"  />
                    </td>                    
                    <td style="text-align:right; border-bottom:1px solid #b8d0ff;">
                        <img src="ZZZZZZZZZZZZZ" alt="ZZZZZZZZZZZZZ"  />
                    </td>
                </tr>
        <?php
            }
        ?>               
                <tr>
                    <td colspan="3" style="padding: 20px 0px 0px 0px; text-align:center;">
                    <input type="button" onclick="window.location='form-editar.php?prd_id=ZZZZZZZZZZZZZ'" value="Modificar nuevamente" class="botones" />
                    &nbsp;
                    <input type="button" onclick="window.location='panel-productos.php'" value="Volver al panel" class="botones" />
                    </td>
                </tr>
            </table>
