<?php include_once( "funciones/menu_header.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Pinterestellar: the galaxy of links</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="CSS/index.css" rel="stylesheet" type="text/css" />
    <link href="CSS/header.css" rel="stylesheet" type="text/css" />
    <link href="CSS/footer.css" rel="stylesheet" type="text/css" />
    <link href="CSS/estilos_botones.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="cintilla">

    </div>
    <div id=contenedor>
        <!--Inicio del header -->
        <div id="div_encabezado">
            <div id="logotipo"></div>
            <div id="btns_identificarse">
                <?php echo listarPanel(); ?>
            </div>
            <div id="div_menu">
                <?php echo listarMenu(); ?>
            </div>
        </div>
        <!--Fin del header -->

        <!--Inicio del cuerpo-->
        <div id="div_cuerpo">
        
        </div>
        <!--Fin del cuerpo-->

        <!--Inicio del footer-->
        <div id="div_footer">
            &copy; Todos los derechos reservados - Pinterestellar
        </div>
    </div>
    <div id="div_footer">
       
        <div class="leyenda">
            &copy; Todos los derechos reservados - Pinterestellar
            <br> Desarrollado por Aldo, Jahzeel, Jorge, Jose, Juan.
        </div>
        
    </div>
    <!--Fin del footer-->
    
</body>

</html>