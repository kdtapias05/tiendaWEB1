<html>
    <head>
        <link  rel="icon"   href="IMAGENES/favicon-32x32.png" type="image/png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ON FEELING -- bodega</title>
        <link rel="stylesheet" href="estilos.css">
        <?php
        include("formulario.php");
        include("conectar.php");
        $op = new Operacionesmysql();
        if(isset($_POST['Eliminar'])){
            $id=$_POST['Eliminar'];
            $op->BorrarRegistro($id);
        }
        if(isset($_GET['Borrartabla'])){
            $op->BorrarTabla();
            header('Location:index.php');
        }
    ?>
    </head>
    <body>
        <div id="contenedor">
            <header>
            </header>
            <div id="separador"></div>
            <div class="section">
                <div id="cell">
                    <div class="row">
                        <form action="index.php">
                            <button type="submit" class="btn_top" name="Regresar">Regresar a Ingresar</button>
                        </form>
                    </div>
                    <div class="row">
                        <form action="bodega.php" method="GET" id="form_borrar_all">
                            <button type="submit" class="btn_bottom" name="Borrartabla">Borrar Tabla</button>
                        </form>
                    </div>
                    

                    <?php
                    $datos=$op->SeleccionarTodos();
                    $ndatos=$op->Nregistros();
                    $j=0;
                    $k=0;
                    WHILE($fila = mysqli_fetch_array($datos)){ 
                        $k++;?>
                        <?php if($j==0){ ?>
                            <div class="row2">
                        <?php
                        }
                        ?>
                            <div class="col2">
                                <span>
                                    <form method="POST" class="form_btn" action="bodega.php">
                                        <input type="hidden" name="Eliminar" value='<?php echo $fila['id']; ?>'/>
                                        <input type="Submit" value="Borrar">
                                    </form>
                                    <form method="POST" class="form_btn" action="editar.php">
                                        <input type="hidden" name="Editar" value='<?php echo $fila['id']; ?>'/>
                                        <input type="Submit" value="Editar">
                                    </form>
                                </span>
                                <dl>
                                    <dt>Nombre: </dt>
                                        <dd><?php echo $fila['nombre'] ?></dd>
                                    <dt>Marca: </dt>
                                        <dd><?php echo $fila['marca'] ?></dd>
                                    <dt>Precio: </dt>
                                        <dd><?php echo $fila['precio'] ?></dd>
                                    <dt>Descripción: </dt>
                                        <dd><?php echo $fila['descripcion'] ?></dd>
                                </dl>
                            </div class="col">
                    
                        <?php
                        if($j==2){ ?>
                            </div class="row">
                            <?php $j=-1?>
                        <?php
                        }
                        $j++;
                        ?>
                    <?php
                    }
                    if($k==$ndatos && $j!=0){ ?>
                            </div>
                    <?php
                    }
                    ?>
                 
                </div id="cell">
            </div class="section">
            <footer style="text-align: center;">
                <p style="font-size: 14px; color: white;" style="vertical-align: middle;"><br>Tosos los derechos reservados On-Feeling 2020.</p>
            </footer>
        </div>
    </body>
</html>

