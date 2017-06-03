<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script src="jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="scripts/load_content.js" type="text/javascript"></script>
<title>Crud Usuarios</title>
</head>
<body>
    <!--BANNER-->
    <div id="banner">
        <div id="menu_banner">
            <div class="elemento_menu_banner" id=""><p>----</p></div>
            <div class="elemento_menu_banner" id=""><p>----</p></div>
            <div class="elemento_menu_banner" id=""><p>----</p></div>
        </div>    
    </div>
    <!--FIN BANNER-->
    
    <!--IZQUIERDA-->
    <div id="izquierda">
        <div id="cont_buscar">
            <input type="text" name="txt_buscar" id="txt_buscar" placeholder="busca">
            <input type="button" class="botones1" id="btn_buscar" value="Buscar" onclick="agregarPublicacion()">
            <input type="button" class="botones1" id="btn_agregar_user" value="+">
        </div>
        <div id="izq_titulo" >Lista</div>
        <!---------------------------CONTENEDOR A LLENAR------------------------------------>
        <div id="izq_contenedor">

        </div>
        <!------------------------------------------------------------------------------------------------->
        <div id="cont_btns_bajo">
            <input type="button" class="botones2" id="btn_previus" value="&larr; Anterior">
            <input type="button" class="botones2" id="btn_next" value="Sigueiente &rarr;">
        </div> 
    </div>
    <!--FIN IZQUIERDA-->
    
    <!--DERECHA-->
    <div id="derecha"></div>
    <!--FIN DERECHA-->
    
</body>
</html>