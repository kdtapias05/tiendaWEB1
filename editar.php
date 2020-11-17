<html>
<head>
<link  rel="icon"   href="IMAGENES/favicon-32x32.png" type="image/png" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ON FEELING -- editar registro</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>

    <?php
        include("formulario.php");
        include("conectar.php");
        $op = new Operacionesmysql();
        if(isset($_POST['Editar'])){
            $id=$_POST['Editar'];
            $productoretornado=$op->SeleccionDato($id);
            $dato=mysqli_fetch_assoc($productoretornado);            
        }
    ?>
    <div id="contenedor">
        <header>
            
        </header>
        <div id="separador"></div>
        <div class="section">
            <div id="cell">
                <form action="registro.php" method="POST">
                    <div id="row">
                        <input type="hidden" name="id" value='<?php echo $dato['id']?>'>
                        <input type="text" class="form-control" placeholder='<?php echo $dato['nombre'];?>' maxlength="21" name="nombre" autocomplete="off">
                    </div>
                    <div id="row">
                        <input type="text" class="form-control" placeholder='<?php echo $dato['marca'];?>' maxlength="21" name="marca" autocomplete="off">
                    </div>
                    <div id="row">
                        <input type="number" class="form-control" placeholder='<?php echo $dato['precio'];?>'  onKeyPress="if(this.value.length==9) return false;" name="precio" autocomplete="off"> 
                    </div>
                    <div id="row">
                        <textarea class="descripcion" cols="30" maxlength="120" name="descripcion" autocomplete="off" placeholder='<?php echo $dato['descripcion'];?>'></textarea>
                    </div>
                    <div id="row">
                        <button type="submit" class="btn_top" name="Editar">Cambiar Registro</button>
                    </div>
                </form>
                <form action="bodega.php">
                    <div class="row">
                        <button type="submit" class="btn_bottom" name="bodega">Ver bodega</button>
                    </div>
                </form> 
            </div>
        </div>
        <footer style="text-align: center;">
                <p style="font-size: 14px; color: white;" style="vertical-align: middle;"><br>Tosos los derechos reservados On-Feeling 2020.</p>
            </footer>
    </div>
    

</body>
</html>