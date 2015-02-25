<?php
	/*
	Copyright (C) 2013  John F. Arroyave Gutiérrez
						unix4you2@gmail.com

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
	*/	

	/*
		Title: PCODER - Practico CODe EditoR
		Ubicacion *[/mod/pcoder/index.php]*.  Archivo que contiene las funciones de enlace al modulo de Edicion de codigo
        
        Este modulo permite abrir archivos de codigo desde la web para editarlos directamente con las caracteristicas de cualquier editor de codigo

		Section: Modulos complementarios
	*/

	// Valida sesion activa de Practico
	@session_start();

    if (!isset($PCOSESS_SesionAbierta)) 
		{
			echo '<head><title>Error</title><style type="text/css"> body { background-color: #000000; color: #7f7f7f; font-family: sans-serif,helvetica; } </style></head><body><table width="100%" height="100%" border=0><tr><td align=center>&#9827; Acceso no autorizado !</td></tr></table></body>';
			die();
		}

if (isset($PCOSESS_SesionAbierta) && @$PCOSESS_LoginUsuario=="admin")
{

	// Configuraciones basicas del modulo
	$PCODER_raiz_modulo = "mod/pcoder/";
	$PCODER_modelos = $PCODER_raiz_modulo."modelo/";
	$PCODER_vistas = $PCODER_raiz_modulo."vista/";
	$PCODER_controladores = $PCODER_raiz_modulo."controlador/";
	$PCODER_idiomas = $PCODER_raiz_modulo."idiomas/";

    //Llamar al controlador inicial de la aplicacion o modulo
    @require($PCODER_modelos.'modelo.php');
    @require($PCODER_vistas.'vista.php');
    @require($PCODER_controladores.'controlador.php');

    //Carga el archivo recibido, si no recibe nada carga un demo
    if (@$PCODER_archivo=="")
        $PCODER_archivo = "mod/pcoder/demo.php";
    PCODER_cargar_archivo($PCODER_archivo);

    $PCODER_Mensajes=0;
    // Verifica que el archivo exista
    $existencia_ok=1;
    if (!file_exists($PCODER_archivo)) { $existencia_ok=0; $PCODER_Mensajes=1; } 
    
    // Verifica permisos de escritura
    $permisos_ok=1;
    $permisos_encontrados=@substr(sprintf('%o', fileperms($PCODER_archivo)), -4);
    if (!is_writable($PCODER_archivo) && $existencia_ok) { $permisos_ok=0; $PCODER_Mensajes=1; } 
    
    // Verifica si existe el directorio para el editor ACE
    $editor_ok=1;
    if (@!file_exists("inc/ace")) { $editor_ok=0; $PCODER_Mensajes=1; } 

// Main function file
include("mod/pcoder/phpFileTree/php_file_tree.php");

/* ################################################################## */
/* ################################################################## */
/*
	Function: PCOMOD_GuardarArchivo
	Almacena un archivo previamente abierto con el PCODER

	Salida:
		Archivo para edicion en pantalla
*/
if ($PCO_Accion=="PCOMOD_GuardarArchivo") 
	{
        //Guarda el archivo
        $PCODER_Respuesta = file_put_contents($PCODER_archivo, $_POST["PCODER_AreaTexto"]) or die("can't open file");
        //Vuelve a cargar el archivo para continuar con su edicion
        auditar("Modifica archivo $PCODER_archivo");
        echo '
        <body>
        <form name="continuar_edicion" action="index.php" method="POST">
            <input type="Hidden" name="PCO_Accion" value="PCOMOD_CargarPcoder">
            <input type="Hidden" name="PCODER_archivo" value="'.$PCODER_archivo.'">
            <input type="Hidden" name="PCODER_TokenEdicion" value="'.$PCODER_TokenEdicion.'">
            <input type="Hidden" name="Presentar_FullScreen" value="'.@$Presentar_FullScreen.'">
            <input type="Hidden" name="Precarga_EstilosBS" value="'.@$Precarga_EstilosBS.'">
        <script type="" language="JavaScript"> document.continuar_edicion.submit();  </script>
        </body>
        ';
	}


/* ################################################################## */
/* ################################################################## */
/*
	Function: PCOMOD_CargarPcoder
	Abre el Practico Code Editor y carga un archivo sobre el para su edicion

    Entradas:

        Normalmente los parametros son: ?PCO_Accion=cargar_pcoder&Presentar_FullScreen=1&Precarga_EstilosBS=1
        * Comando: javascript:PCO_VentanaPopup('index.php?PCO_Accion=PCOMOD_CargarPcoder&Presentar_FullScreen=1&Precarga_EstilosBS=1','Pcoder','toolbar=no, location=no, directories=0, directories=no, status=no, location=no, menubar=no ,scrollbars=no, resizable=yes, fullscreen=no, titlebar=no, width=800, height=600');

	Salida:
		Archivo para edicion en pantalla
*/
if ($PCO_Accion=="PCOMOD_CargarPcoder") 
	{
?>
    <style type="text/css">
        html, body {
            margin: 0;
            padding: 0;
            /*height: 100%;*/
            /*min-height: 100%;*/
            width: 100%;
            background: #888888;  /* 002a36 | BFBFBF | 888888 */
            overflow-x: hidden;
            overflow-y: hidden;
        }
        #marco_editor_codigo { 
            margin-top:34px;
        }
        #marco_explorador { 
            overflow-y: auto;
            overflow-x: auto;
        }
        #editor_codigo { 
            width: 100%; 
            height: 600px;  /*Define el tamano segun resolucion*/
        }
    </style>

    <!-- Agrega archivos necesarios para el Explorador en arbol de directorios -->
    <link href="mod/pcoder/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="mod/pcoder/phpFileTree/php_file_tree.js" type="text/javascript"></script>
<body>

<div id="contenedor_principal">


    <nav id="barra_superior" class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

            <!-- LOGO PCODER -->
            <div class="navbar-header">
                <a class="navbar-brand" href=""><img src="img/pcoder.png"></a>
            </div>

            <!-- BARRA DE HERRAMIENTAS --> 
            <div class="navbar-form navbar-left">
                <button id="boton_navegador_archivos" class="btn btn-primary btn-xs" data-toggle="modal" href="#NavegadorArchivos" title="<?php echo $MULTILANG_Explorar; ?>"><i class="fa fa-folder-open fa-fw"></i></button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" OnClick="Guardar();" title="<?php echo $MULTILANG_Guardar; ?>"><i class="fa fa-save fa-fw"></i></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--<a class="btn btn-default btn-xs" OnClick="Deshacer();"><i class="fa fa-undo"></i></a>
                <a class="btn btn-default btn-xs" OnClick="Rehacer();"><i class="fa fa-repeat"></i></a>-->
                <a class="btn btn-info btn-xs" data-toggle="modal" href="#AtajosTeclado"><i class="fa fa-keyboard-o"></i> <?php echo $MULTILANG_AtajosTitPcoder; ?></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-warning btn-xs" OnClick="MaximizarEditor();" title="Recargar ventana, Util despues de maximizar" ><i class="fa fa-refresh"></i> Ajuste inicial de ventana</a>
            </div>

            <!-- INFORMACION DEL ARCHIVO -->
            <ul class="nav navbar-nav navbar-form navbar-right">
                <li class="btn-default btn-xs btn-info">
                    &nbsp;<?php echo $MULTILANG_Tipo; ?> <span class="badge"><?php echo $PCODER_TipoElemento; ?></span>&nbsp;<br>
                    &nbsp;<?php echo $PCODER_FechaElemento; ?> <span class="badge"><?php echo $PCODER_TamanoElemento; ?> Kb</span>&nbsp;<br>
                </li>
            </ul>

        </div><!-- /.container-fluid -->
    </nav>


    <div class="row">
        <?php 
            if ($PCODER_Mensajes==1) echo '<br><br>';
            //Presenta mensajes de error o informacion
            if ($existencia_ok==0)
                mensaje('<i class="fa fa-warning text-info texto-blink"></i> '.$MULTILANG_Error.': '.$MULTILANG_ErrorExistencia.'. '.$MULTILANG_Cargando.'='.$PCODER_archivo, '', '', '', 'alert alert-danger alert-dismissible');
            if ($permisos_ok==0)
                {
                    mensaje('<i class="fa fa-warning text-info texto-blink"></i> '.$MULTILANG_Error.': '.$MULTILANG_ErrorRW.'. '.$MULTILANG_Estado.'='.$permisos_encontrados, '', '', '', 'alert alert-warning alert-dismissible');
                }
            if ($editor_ok==0)
                {
                    mensaje('<i class="fa fa-warning text-info texto-blink"></i> '.$MULTILANG_Error.': '.$MULTILANG_ErrorNoACE.': '.$PCODER_archivo, '', '', '', 'alert alert-danger alert-dismissible');
                    die();
                }
        ?>
    </div>


    <!-- EXPLORADOR DE ARCHIVOS -->
    <?php abrir_dialogo_modal("NavegadorArchivos",$MULTILANG_Explorar.' - '.$MULTILANG_CargarArchivo); ?>
        <i class="well well-sm btn-xs btn-block"><?php echo $MULTILANG_AyudaExplorador; ?></i>
        <div id="marco_explorador" class="embed-responsive embed-responsive-4by3">
            <?php
                //Presenta el arbol de carpetas
                //echo @php_file_tree($_SERVER['DOCUMENT_ROOT'], "http://example.com/?file=[link]/");
                //echo @php_file_tree(".", "javascript:alert('You clicked on [link]');");
                //echo @php_file_tree(".", "javascript:alert('You clicked on [link]');",$PCODER_ExtensionesPermitidas);
                //$PCODER_ExtensionesPermitidas = array("txt", "php", "inc", "css", "txt");
                echo @php_file_tree(".", "javascript:PCODER_CargarArchivo('[link]');");
            ?>  
        </div>
    <?php 
        $barra_herramientas_modal='
        <button type="button" class="btn btn-default" data-dismiss="modal">'.$MULTILANG_Cancelar.' {<i class="fa fa-keyboard-o"></i> Esc}</button>';
        cerrar_dialogo_modal($barra_herramientas_modal);
    ?>


    <!-- AYUDA DE TECLADO -->
    <?php abrir_dialogo_modal("AtajosTeclado",$MULTILANG_Ayuda.': <b>'.$MULTILANG_AtajosTitPcoder.'</b>',"modal-wide"); ?>


        <DIV style="DISPLAY: block; OVERFLOW: auto; WIDTH: 100%; POSITION: relative; HEIGHT: 600px">


            <div class="btn btn-success btn-block"><b><?php echo $MULTILANG_Basicos; ?></b></div>
            <table class="table table-responsive table-bordered table-condensed table-hover btn-xs">
                <thead>
                    <tr>
                        <td><b>PC (Windows/Linux)</b></td>
                        <td><b>Mac</b></td>
                        <td><b>Acci&oacute;n</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ctrl-L</td>
                        <td>Command-L</td>
                        <td>Ir a la l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Ctrl-F</td>
                        <td>Command-F</td>
                        <td>Buscar</td>
                    </tr>
                    <tr>
                        <td>Ctrl-H</td>
                        <td>Command-Option-F</td>
                        <td>Buscar y reemplazar</td>
                    </tr>
                    <tr>
                        <td>Ctrl-K</td>
                        <td>Command-G</td>
                        <td>Buscar siguiente</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-K</td>
                        <td>Command-Shift-G</td>
                        <td>Buscar anterior</td>
                    </tr>
                    <tr>
                        <td>Tab</td>
                        <td>Tab</td>
                        <td>Agregar sangr&iacute;a</td>
                    </tr>
                    <tr>
                        <td>Shift-Tab</td>
                        <td>Shift-Tab</td>
                        <td>Disminuir sangr&iacute;a</td>
                    </tr>
                    <tr>
                        <td>Alt-L, Ctrl-F1</td>
                        <td>Command-Option-L, Command-F1</td>
                        <td>Recoger/Expandir selecci&oacute;n</td>
                    </tr>
                    <tr>
                        <td>Ctrl-P</td>
                        <td></td>
                        <td>Buscar el siguiente elemento que abre o cierra el actual (llaves, par&eacute;ntesis,cochetes,etc)</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-P</td>
                        <td></td>
                        <td>Buscar el siguiente elemento que abre o cierra el actual (llaves, par&eacute;ntesis,cochetes,etc)</td>
                    </tr>
                </tbody>
            </table>

            <div class="btn btn-success btn-block"><b><?php echo $MULTILANG_Desplazar; ?></b></div>
            <table class="table table-responsive table-bordered table-condensed table-hover btn-xs">
                <thead>
                    <tr>
                        <td><b>PC (Windows/Linux)</b></td>
                        <td><b>Mac</b></td>
                        <td><b>Acci&oacute;n</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Down</td>
                        <td>Down, Ctrl-N</td>
                        <td>Bajar una l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Up</td>
                        <td>Up, Ctrl-P</td>
                        <td>Subir una l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Ctrl-End</td>
                        <td>Command-End, Command-Down</td>
                        <td>Ir al final</td>
                    </tr>
                    <tr>
                        <td>Left</td>
                        <td>Left, Ctrl-B</td>
                        <td>Ir a la izquierda</td>
                    </tr>
                    <tr>
                        <td>Alt-Right, End</td>
                        <td>Command-Right, End, Ctrl-E</td>
                        <td>Ir al final de la l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Alt-Left, Home</td>
                        <td>Command-Left, Home, Ctrl-A</td>
                        <td>Ir al comienzo de la l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>PageDown</td>
                        <td>Option-PageDown, Ctrl-V</td>
                        <td>Ir una p&aacute;gina abajo</td>
                    </tr>
                    <tr>
                        <td>PageUp</td>
                        <td>Option-PageUp</td>
                        <td>Ir una p&aacute;gina arriba</td>
                    </tr>
                    <tr>
                        <td>Right</td>
                        <td>Right, Ctrl-F</td>
                        <td>Ir a la derecha</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Home</td>
                        <td>Command-Home, Command-Up</td>
                        <td>Ir al inicio del documento</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Left</td>
                        <td>Option-Left</td>
                        <td>Ir una palabra a la izquierda</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Right</td>
                        <td>Option-Right</td>
                        <td>Ir una palabra a la derecha</td>
                    </tr>
                    <tr>
                        <td>Alt-Down</td>
                        <td>Option-Down</td>
                        <td>Mover una l&iacute;nea abajo</td>
                    </tr>
                    <tr>
                        <td>Alt-Up</td>
                        <td>Option-Up</td>
                        <td>Mover una l&iacute;nea arriba</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Shift-Up</td>
                        <td>Ctrl-Option-Shift-Up</td>
                        <td>Mover multicursor de la l&iacute;nea actual a la l&iacute;nea superior</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Shift-Down</td>
                        <td>Ctrl-Option-Shift-Down</td>
                        <td>Mover multicursor de la l&iacute;nea actual a la l&iacute;nea inferior</td>
                    </tr>
                    <tr>
                        <td>Insert</td>
                        <td>Insert</td>
                        <td>Sobreescribir en el cursor</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Shift-Right</td>
                        <td>Ctrl-Option-Shift-Right</td>
                        <td>Remover la ocurrencia actual de la multiseleccion y moverse al siguiente</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Shift-Left</td>
                        <td>Ctrl-Option-Shift-Left</td>
                        <td>Remover la ocurrencia actual de la multiseleccion y moverse al anterior</td>
                    </tr>
                    <tr>
                        <td>Ctrl-D</td>
                        <td>Command-D</td>
                        <td>Remover l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Alt-Delete</td>
                        <td>Ctrl-K</td>
                        <td>Remover hasta el fin de l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Alt-Backspace</td>
                        <td>Command-Backspace</td>
                        <td>Remover hasta el inicio de l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Backspace</td>
                        <td>Option-Backspace, Ctrl-Option-Backspace</td>
                        <td>Remover palabra a la izquierda</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Delete</td>
                        <td>Option-Delete</td>
                        <td>Remover palabra a la derecha</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Down</td>
                        <td>Command-Down</td>
                        <td>Desplazar una l&iacute;nea hacia abajo</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Up</td>
                        <td></td>
                        <td>Desplazar una l&iacute;nea hacia arriba</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Option-PageDown	</td>
                        <td>Desplazar una p&aacute;gina hacia abajo</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Option-PageUp</td>
                        <td>Desplazar una p&aacute;gina hacia arriba</td>
                    </tr>
                </tbody>
            </table>

            <div class="btn btn-success btn-block"><b><?php echo $MULTILANG_Seleccionar; ?></b></div>
            <table class="table table-responsive table-bordered table-condensed table-hover btn-xs">
                <thead>
                    <tr>
                        <td><b>PC (Windows/Linux)</b></td>
                        <td><b>Mac</b></td>
                        <td><b>Acci&oacute;n</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ctrl-A</td>
                        <td>Command-A</td>
                        <td>Seleccionar todo</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-L</td>
                        <td>Ctrl-Shift-L</td>
                        <td>Seleccionar todo de una multiselecci&oacute;n</td>
                    </tr>
                    <tr>
                        <td>Shift-Down</td>
                        <td>Shift-Down</td>
                        <td>Seleccionar hacia abajo</td>
                    </tr>
                    <tr>
                        <td>Shift-Left</td>
                        <td>Shift-Left</td>
                        <td>Seleccionar hacia la izquierda</td>
                    </tr>
                    <tr>
                        <td>Shift-End</td>
                        <td>Shift-End</td>
                        <td>Seleccionar hasta el fin de l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Shift-Home</td>
                        <td>Shift-Home</td>
                        <td>Seleccionar hasta el comienzo de l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Shift-PageDown</td>
                        <td>Shift-PageDown</td>
                        <td>Seleccionar una p&aacute;gina hacia abajo</td>
                    </tr>
                    <tr>
                        <td>Shift-PageUp</td>
                        <td>Shift-PageUp</td>
                        <td>Seleccionar una p&aacute;gina hacia arriba</td>
                    </tr>
                    <tr>
                        <td>Shift-Right</td>
                        <td>Shift-Right</td>
                        <td>Seleccionar hacia la derecha</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-End</td>
                        <td>Command-Shift-Down</td>
                        <td>Seleccionar hasta el fin del documento</td>
                    </tr>
                    <tr>
                        <td>Alt-Shift-Right</td>
                        <td>Command-Shift-Right	</td>
                        <td>Seleccionar hasta el fin de l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Alt-Shift-Left</td>
                        <td>Command-Shift-Left</td>
                        <td>Seleccionar hasta el comienzo de l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-Home</td>
                        <td>Command-Shift-Up</td>
                        <td>Seleccionar hasta el inicio del documento</td>
                    </tr>
                    <tr>
                        <td>Shift-Up</td>
                        <td>Shift-Up</td>
                        <td>Seleccionar hacia arriba</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-Left</td>
                        <td>Option-Shift-Left</td>
                        <td>Seleccionar palabra a la izquierda</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-Right</td>
                        <td>Option-Shift-Right</td>
                        <td>Seleccionar palabra a la derecha</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-D</td>
                        <td>Command-Shift-D</td>
                        <td>Duplicar la selecci&oacute;n</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Up</td>
                        <td>Ctrl-Option-Up</td>
                        <td>Agregar multicursor arriba</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Down</td>
                        <td>Ctrl-Option-Down</td>
                        <td>Agregar multicursor abajo</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Right</td>
                        <td>Ctrl-Option-Right</td>
                        <td>A&ntilde;adir siguiente aparici&oacute;n de selecci&oacute;n m&uacute;ltiple</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Alt-Left</td>
                        <td>Ctrl-Option-Left</td>
                        <td>A&ntilde;adir previa aparici&oacute;n de selecci&oacute;n m&uacute;ltiple</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Ctrl-L</td>
                        <td>Centrar la selecci&oacute;n</td>
                    </tr>
                </tbody>
            </table>


            <div class="btn btn-success btn-block"><b><?php echo $MULTILANG_Otros; ?></b></div>
            <table class="table table-responsive table-bordered table-condensed table-hover btn-xs">
                <thead>
                    <tr>
                        <td><b>PC (Windows/Linux)</b></td>
                        <td><b>Mac</b></td>
                        <td><b>Acci&oacute;n</b></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ctrl-Alt-E</td>
                        <td></td>
                        <td>Grabar una macro</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-E</td>
                        <td>Command-Shift-E</td>
                        <td>Ejecutar una macro</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Z</td>
                        <td>Command-Z</td>
                        <td>Deshacer</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-Z, Ctrl-Y</td>
                        <td>Command-Shift-Z, Command-Y</td>
                        <td>Rehacer</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Shift-U</td>
                        <td>Ctrl-Shift-U</td>
                        <td>Cambiar a min&uacute;sculas</td>
                    </tr>
                    <tr>
                        <td>Ctrl-U</td>
                        <td>Ctrl-U</td>
                        <td>Cambiar a may&uacute;sculas</td>
                    </tr>
                    <tr>
                        <td>Alt-Shift-Down</td>
                        <td>Command-Option-Down</td>
                        <td>Copiar l&iacute;nea debajo</td>
                    </tr>
                    <tr>
                        <td>Alt-Shift-Up</td>
                        <td>Command-Option-Up</td>
                        <td>Copiar l&iacute;nea encima</td>
                    </tr>
                    <tr>
                        <td>Delete</td>
                        <td></td>
                        <td>Eliminar</td>
                    </tr>
                    <tr>
                        <td>Alt-0</td>
                        <td>Command-Option-0</td>
                        <td>Recoger todo</td>
                    </tr>
                    <tr>
                        <td>Ctrl-Enter, F11</td>
                        <td>Command-Enter</td>
                        <td>Pantalla completa</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Ctrl-O</td>
                        <td>Dividir l&iacute;nea</td>
                    </tr>
                    <tr>
                        <td>Ctrl-/</td>
                        <td>Command-/</td>
                        <td>Cambiar a comentario</td>
                    </tr>
                    <tr>
                        <td>Ctrl-T</td>
                        <td>Ctrl-T</td>
                        <td>Transponer letras</td>
                    </tr>
                    <tr>
                        <td>Alt-Shift-L, Ctrl-Shift-F1</td>
                        <td>Command-Option-Shift-L, Command-Shift-F1</td>
                        <td>Expandir</td>
                    </tr>
                    <tr>
                        <td>Alt-Shift-0</td>
                        <td>Command-Option-Shift-0</td>
                        <td>Expandir todo</td>
                    </tr>
                    <tr>
                        <td>Ctrl-</td>
                        <td>Command-</td>
                        <td>Ver menu de configuraci&oacute;n</td>
                    </tr>
                </tbody>
            </table>

        </DIV>
    <?php 
        $barra_herramientas_modal='
        <button type="button" class="btn btn-default" data-dismiss="modal">'.$MULTILANG_Cerrar.' {<i class="fa fa-keyboard-o"></i> Esc}</button>';
        cerrar_dialogo_modal($barra_herramientas_modal);
    ?>
    

    <!-- ZONA DE EDICION -->
    <form name="form_archivo_editado" action="index.php" method="POST" target="">
        <textarea id="PCODER_AreaTexto" name="PCODER_AreaTexto" style="visibility:hidden; display:none;"><?php echo $PCODERcontenido_archivo; ?></textarea>
        <input name="PCODER_TokenEdicion" type="hidden" value="<?php echo $PCODER_TokenEdicion; ?>">
        <input name="PCODER_archivo" type="hidden" value="<?php echo $PCODER_archivo; ?>">
        <input type="Hidden" name="Presentar_FullScreen" value="<?php echo $Presentar_FullScreen; ?>">
        <input type="Hidden" name="Precarga_EstilosBS" value="<?php echo $Precarga_EstilosBS; ?>">
        <input name="PCO_Accion" type="hidden" value="PCOMOD_GuardarArchivo">
    </form>

    <div class="row">
        <div class="row container-full">
            <div id="marco_editor_codigo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container-full">
                <div class="form-group">
                    <!-- Dispone el control de area de texto y el div donde se empotrara el editor -->
                    <div id="editor_codigo"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- CONFIGURACIONES Y UTILIDADES DEL EDITOR -->
<nav id="barra_inferior" class="navbar navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav text-inverse">

        <li class="btn-xs">
            <label for="tamano_fuente">Tamano Fuente</label>
            <select id="tamano_fuente" size="1" class="form-control btn-xs" onchange="CambiarFuenteEditor(this.value)">
              <option value="10px">10px</option>
              <option value="11px">11px</option>
              <option value="12px">12px</option>
              <option value="13px">13px</option>
              <option value="14px" selected="selected">14px</option>
              <option value="16px">16px</option>
              <option value="18px">18px</option>
              <option value="20px">20px</option>
              <option value="24px">24px</option>
            </select>
        </li>

        <li class="btn-xs">
            <label for="tema_grafico">Apariencia</label>
            <select id="tema_grafico" size="1" class="form-control btn-xs btn-primary" onchange="CambiarTemaEditor(this.value)">
              <optgroup label="Brillantes / Bright">
                  <?php
                    //Presenta los temas claros disponibles
                    for ($i=0;$i<count($PCODER_TemasBrillantes);$i++)
                        echo '<option value="ace/theme/'.$PCODER_TemasBrillantes[$i]["Valor"].'">'.$PCODER_TemasBrillantes[$i]["Nombre"].'</option>';
                  ?>
              </optgroup>
              <optgroup label="Oscuros / Dark">
                  <?php
                    //Presenta los temas claros disponibles
                    for ($i=0;$i<count($PCODER_TemasOscuros);$i++)
                        echo '<option value="ace/theme/'.$PCODER_TemasOscuros[$i]["Valor"].'">'.$PCODER_TemasOscuros[$i]["Nombre"].'</option>';
                  ?>
              </optgroup>
            </select>
        </li>

        <li class="btn-xs">
            <label for="modo_archivo">Lenguaje</label>
            <select id="modo_archivo" size="1" class="form-control btn-xs btn-info" onchange="CambiarModoEditor(this.value)">
                  <?php
                    //Presenta los temas claros disponibles
                    for ($i=0;$i<count($PCODER_Modos);$i++)
                        {
                            //Determina si el lenguaje o modo de archivo actual es la opcion a desplegar
                            $modo_seleccion='';
                            if($PCODER_Modos[$i]["Nombre"]==$PCODER_ModoEditor)
                                $modo_seleccion='SELECTED';
                            //PResenta la opcion
                            echo '<option value="ace/mode/'.$PCODER_Modos[$i]["Nombre"].'" '.$modo_seleccion.' >'.$PCODER_Modos[$i]["Nombre"].'</option>';
                        }
                  ?>
            </select>
        </li>

        <li class="btn-xs">
            <label for="modo_invisibles">Ver caracteres invisibles</label>
            <select id="modo_invisibles" size="1" class="form-control btn-xs" onchange="CaracteresInvisiblesEditor(this.value)">
                <option value="0"><?php echo $MULTILANG_No; ?></option>
                <option value="1"><?php echo $MULTILANG_Si; ?></option>
            </select>
        </li>

      </ul>




      <ul class="nav navbar-nav navbar-right">
            <a class="btn btn-xs" onclick="AumentarEditor();"><i class="fa fa-plus-square fa-fw"></i></a>
            <br>
            <a class="btn btn-xs" onclick="DisminuirEditor();"><i class="fa fa-minus-square fa-fw"></i></a>
      </ul>

      <ul class="nav navbar-nav navbar-right">
            <input id="linea_salto" name="linea_salto" type="text" class="btn-xs btn-default" placeholder="<?php echo $MULTILANG_SaltarLinea; ?>">
            <button onClick="SaltarALinea();" class="btn btn-default btn-xs"><?php echo $MULTILANG_Ir; ?> <i class="fa fa-arrow-circle-right"></i></button>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


</div>








    <!-- jQuery -->
	<script type="text/javascript" src="inc/jquery/jquery-2.1.0.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="inc/bootstrap/js/bootstrap.min.js"></script>

    <script language="JavaScript">
        //Carga los tooltips programados en la hoja.  Por defecto todos los elementos con data-toggle=tootip
        $(function () {
          $('[data-toggle="tooltip"]').tooltip();
        })
    </script>

    <script language="JavaScript">
        //Carga los popovers programados en la hoja.  Por defecto todos los elementos con data-toggle=popover
        $(function () {
          $('[data-toggle="popover"]').popover()
        })
    </script>

    <script src="inc/ace/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>


    <script type="text/javascript">
        var alto_inicial_editor=0;
        function MaximizarEditor()
            {
                var offset = (navigator.userAgent.indexOf("Mac") != -1 ||
                navigator.userAgent.indexOf("Gecko") != -1 ||
                navigator.appName.indexOf("Netscape") != -1) ? 0 : 4;
                window.moveTo(-offset, -offset);
                window.resizeTo(screen.availWidth + (2 * offset), screen.availHeight + (2 * offset));
                /*
                Forma 2:
                window.moveTo(0,0);
                window.outerHeight = screen.availHeight;
                window.outerWidth = screen.availWidth;
                
                Forma 3:
                $(window).hieght();
                $(window).width();
                
                Forma 4:
                $(window).resize(function()
                {   
                    setDisplayBoardSize();
                });
                */
                //Recarga el documento se queda en ciclo... ciudado
                location.reload();
            }
        function RedimensionarEditor()
            {
                var margen_correccion=3; //Pixeles Antes 3
                var alto_pantalla=$(document).height();
                var alto_contenedor_principal=$(contenedor_principal).height();
                var alto_barra_superior=$(barra_superior).height();
                var alto_barra_inferior=$(barra_inferior).height();
                alto_editor = alto_pantalla - alto_barra_superior - alto_barra_inferior - margen_correccion;
                alto_inicial_editor=alto_editor;
                document.getElementById("editor_codigo").style.height=alto_editor+"px";
            }
        function DisminuirEditor()
            {
                var alto_actual=$(editor_codigo).height();
                alto_editor = alto_actual - 15;
                if (alto_editor<600)
                    alto_editor=alto_actual;
                document.getElementById("editor_codigo").style.height=alto_editor+"px";
            }
        function AumentarEditor()
            {
                var alto_actual=$(editor_codigo).height();
                alto_editor = alto_actual + 15;
                if (alto_editor>alto_inicial_editor)
                    alto_editor=alto_inicial_editor;
                document.getElementById("editor_codigo").style.height=alto_editor+"px";
            }
        function CambiarFuenteEditor(tamano)
            {
                //Cambia la fuente del editor al tamano recibido
                editor.setFontSize(tamano);
            }
        function CambiarTemaEditor(tema)
            {
                //Cambia la apariencia grafica del editor
                editor.setTheme(tema);
            }
        function CambiarModoEditor(modo)
            {
                var ModoFiltrado = modo.replace(/_/g, " ");
                ModoFiltrado = ModoFiltrado.toLowerCase();
                //Cambia el modo de sintaxis y errores resaltado por el editor
                editor.getSession().setMode(ModoFiltrado);
            }
        function CaracteresInvisiblesEditor(estado)
            {
                //Cambia el modo del editor para mostrar (true) u ocultar (false) los caracteres invisibles
                if (estado==0)
                    editor.setShowInvisibles(false);
                else
                    editor.setShowInvisibles(true);
            }
        function ActualizarTituloEditor(titulo)
            {
                //Cambia el titulo presentado en la ventada del editor
                document.title = titulo;
                $(document).attr('title',titulo);
            }
        function SaltarALinea()
            {
                var linea = document.getElementById("linea_salto").value;
                //Salta a una linea especifica del editor
                editor.gotoLine(linea, 1, true);
            }
        function Deshacer()
            {
                editor.undo();
            }
        function Rehacer()
            {
                editor.redo();
            }
        function Guardar()
            {
                document.form_archivo_editado.submit();
            }
        function PCODER_CargarArchivo(archivo)
            {
                /*
                estado_error=0;
                if (document.form_archivo_editado.PCODER_archivo.value==archivo)
                    alert("El archivo a cargar es el mismo actual.\n\nFile you wish to load is already open.");
                //Si no hay errores continua con la carga
                if (!estado_error)
                    {
                        //Evalua si se trata del mismo archivo o uno diferente y lo abre en otra ventana
                        if (document.form_archivo_editado.PCODER_archivo.value!=archivo)
                            document.form_archivo_editado.target="_BLANK";

                        //Lleva los valores al form de trabajo actual
                        document.form_archivo_editado.PCO_Accion.value="PCOMOD_CargarPcoder";
                        document.form_archivo_editado.Presentar_FullScreen.value="<?php echo @$Presentar_FullScreen; ?>";
                        document.form_archivo_editado.Precarga_EstilosBS.value="<?php echo @$Precarga_EstilosBS; ?>";
                        document.form_archivo_editado.PCODER_archivo.value=archivo;
                        document.form_archivo_editado.PCODER_TokenEdicion.value="<?php echo @$PCODER_TokenEdicion; ?>";
                        document.form_archivo_editado.submit();
                    }
                */
                //Oculta el modal de seleccion del archivo
                $('button#boton_navegador_archivos').click();
                //Carga la nueva ventana con el archivo, Reemplaza metodo anterior
                PCO_VentanaPopup('index.php?PCO_Accion=PCOMOD_CargarPcoder&Presentar_FullScreen=1&Precarga_EstilosBS=1&PCODER_archivo='+archivo,'Pcoder'+archivo,'toolbar=no, location=no, directories=0, directories=no, status=no, location=no, menubar=no ,scrollbars=no, resizable=yes, fullscreen=no, titlebar=no, width=800, height=600');
            }
    
        //MaximizarEditor();
        
        // Crea el editor
        editor = ace.edit("editor_codigo");
        editor.getSession().setUseWorker(false); //Evita el error 404 para "worker-php.js Failed to load resource: the server responded with a status of 404 (Not Found)"
        
        //Actualiza el editor con el valor cargado inicialmente en el textarea
        editor.setValue(document.getElementById("PCODER_AreaTexto").value);

        // Inicia el editor de codigo con las opciones predeterminadas
        ActualizarTituloEditor("<?php echo $PCODER_NombreArchivo.' {PCodEr}'; ?>");
        CambiarFuenteEditor("14px");
        CambiarTemaEditor("ace/theme/tomorrow_night");  //tomorrow_night|twilight|eclipse|ambiance|ETC
        CambiarModoEditor("ace/mode/<?php echo $PCODER_ModoEditor; ?>");
        CaracteresInvisiblesEditor(0);
        editor.clearSelection();
        
        //En cada evento de cambio actualiza el textarea
        editor.getSession().on('change', function(){
          document.getElementById("PCODER_AreaTexto").value=editor.getSession().getValue();
        });

        //Ajusta tamano del editor al inicio y en cada cambio de tamano de la ventana
        RedimensionarEditor();
        $( window ).resize(function() {
          RedimensionarEditor();
        });
    </script>

    <?php
        // Estadisticas de uso anonimo con GABeacon
        $PrefijoGA='<img src="https://ga-beacon.appspot.com/';
        $PosfijoGA='/Practico/'.$PCO_Accion.'?pixel" border=0 ALT=""/>';
        // Este valor indica un ID generico de GA UA-847800-9 No edite esta linea sobre el codigo
        // Para validar que su ID es diferente al generico de seguimiento.  En lugar de esto cambie
        // su valor a traves del panel de configuracion de Practico con el entregado como ID de GoogleAnalytics
        $Infijo=base64_decode("VUEtODQ3ODAwLTk=");
        echo $PrefijoGA.$Infijo.$PosfijoGA;
        if(@$CodigoGoogleAnalytics!="")
            echo $PrefijoGA.$CodigoGoogleAnalytics.$PosfijoGA;	
    ?>

</body>
</html>
<?php
	}

} //Fin permisos modulo
