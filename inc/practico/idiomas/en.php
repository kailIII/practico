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
		Title: Idioma espanol
		Ubicacion *[/inc/idioma/es.php]*.  Incluye la definicion de variables utilizadas para presentar mensajes en el idioma correspondiente
		NOTAS IMPORTANTES:
			* Por cuestiones de rendimiento se recomienda la definicion usando comillas simples.
			* Usar las dobles solo cuando se requieran variables o caracteres especiales.
			* Se pueden definir cadenas en funcion de otras definidas con anterioridad
			* Se puede hacer uso de notacion HTML dentro de las cadenas para dar formato
	*/

	// Cadena que describe el archivo de idioma para su escogencia
	$MULTILANG_DescripcionIdioma='Ingles - English';

	//Lexico general (palabras y frases comunes a varios modulos)
	$MULTILANG_Accion='Action';
	$MULTILANG_Actualizacion='Update';
	$MULTILANG_Actualizar='Upgrade';
	$MULTILANG_Administre='Manage';
	$MULTILANG_Agregar='Add';
	$MULTILANG_Anonimo='Anonymous';
	$MULTILANG_Anterior='Previous';
	$MULTILANG_Apagado='Off';
	$MULTILANG_Aplicando='Applying';
	$MULTILANG_Asistente='Wizard';
	$MULTILANG_Atencion='Attention';
	$MULTILANG_Ayuda='Help';
	$MULTILANG_Basedatos='Data base';
	$MULTILANG_BarraHtas='Toolbar';
	$MULTILANG_Campo='Field';
	$MULTILANG_Cancelar='Cancel';
	$MULTILANG_CaracteresCaptcha='Number of characters for captcha?';
	$MULTILANG_Cerrar='Close';
	$MULTILANG_CerrarSesion='Logout';
	$MULTILANG_Cliente='Client';
	$MULTILANG_Columna='Column';
	$MULTILANG_ConfiguracionGeneral='General Settings';
	$MULTILANG_ConfiguracionVarias='Configuring multiple options';
	$MULTILANG_Confirma='Are you sure you want to continue?';
	$MULTILANG_Continuar='Continue';
	$MULTILANG_Contrasena='Password';
	$MULTILANG_Controlador='Driver';
	$MULTILANG_Correcto='Right';
	$MULTILANG_Correo='Email';
	$MULTILANG_Cualquiera='Any';
	$MULTILANG_Defina='Define';
	$MULTILANG_Deshabilitado='Disabled';
	$MULTILANG_Detalles='Details';
	$MULTILANG_Disene='Design';
	$MULTILANG_Editar='Edit';
	$MULTILANG_Ejecutar='Execute';
	$MULTILANG_Eliminar='Delete';
	$MULTILANG_Encendido='On';
	$MULTILANG_Error='Error';
	$MULTILANG_Estado='Status';
	$MULTILANG_Etiqueta='Label';
	$MULTILANG_Fecha='Date';
	$MULTILANG_Finalizado='Finished';
	$MULTILANG_Formularios='Forms';
	$MULTILANG_Grande='Big';
	$MULTILANG_Grafico='Graphic';
	$MULTILANG_Guardar='Save';
	$MULTILANG_Habilitado='Enabled';
	$MULTILANG_Habilitar='Enable';
	$MULTILANG_Hora='Time';
	$MULTILANG_IdiomaPredeterminado='Default language';
	$MULTILANG_Imagen='Picture';
	$MULTILANG_Importante='Important';
	$MULTILANG_InfoAdicional='Additional information';
	$MULTILANG_Informes='Reports';
	$MULTILANG_Ingresar='Sign in';
	$MULTILANG_Instante='Instant';
	$MULTILANG_IrEscritorio='Go to my desk';
	$MULTILANG_LlavePaso='SignKey';
	$MULTILANG_MotorBD='Database Engine';
	$MULTILANG_Ninguno='None';
	$MULTILANG_No='No';
	$MULTILANG_Nombre='Name';
	$MULTILANG_NombreRAD='RAD Name';
	$MULTILANG_Opcional='Optional';
	$MULTILANG_OpcionesMenu='Menu options';
	$MULTILANG_Otros='Others';
	$MULTILANG_Paso='Step';
	$MULTILANG_Peso='Weight';
	$MULTILANG_Pequeno='small';
	$MULTILANG_PlantillaActiva='Active template';
	$MULTILANG_Predeterminado='Default';
	$MULTILANG_ProcesoFin='Process completed';
	$MULTILANG_Puerto='Port';
	$MULTILANG_Si='Yes';
	$MULTILANG_Servidor='Server';
	$MULTILANG_SeleccioneUno='Choose one';
	$MULTILANG_Suspender='Suspend';
	$MULTILANG_Tablas='Tables';
	$MULTILANG_TablaDatos='Data table';
	$MULTILANG_TiempoCarga='Load time';
	$MULTILANG_Tipo='Type';
	$MULTILANG_TipoMotor='Engine type';
	$MULTILANG_Titulo='Title';
	$MULTILANG_TotalRegistros='Total records found';
	$MULTILANG_Usuario='User';
	$MULTILANG_Vacio='Empty';
	$MULTILANG_Version='Versi&oacute;n';
	$MULTILANG_ZonaHoraria='Time zone';
	$MULTILANG_VistaImpresion='Printer view';
	
	//Ventana de login
	$MULTILANG_TituloLogin='System Login';
	$MULTILANG_CodigoSeguridad='Security code';
	$MULTILANG_IngreseCodigoSeguridad='Enter here the security code';
	$MULTILANG_AccesoExclusivo='Access to this software is only for registered users. For your safety, never share your username and password.';
	$MULTILANG_LoginNoWSTit='Error trying to load the authentication webservice';
	$MULTILANG_LoginNoWSDes='The file_get_contents() function can not to load the XML output file built by Practico authentication process.<br>  Check your web server configuration/installation to see that this funtion can works correctly and without restrictions.<br>  A way to check that Practicos process is fine but your server doesnt allow to load the XML file<br>is opening the next link and checking if your browser loads the XML correctly.  Activating debug mode on your Practicos config you could see more details: ';
	$MULTILANG_OauthLogin='Login using my social network';
	$MULTILANG_LoginClasico='Login with Practicos account';
	$MULTILANG_LoginOauthDes='<b>Social networks and other authentication providers availables</b><br>Click over the logo to login using the username and password from your favorite site.';

	//Banderas de campos en formularios
	$MULTILANG_TitValorUnico='The value entered does not accept duplicate';
	$MULTILANG_DesValorUnico='The system will validate the information entered in this field, if there is already a record with that value in the database will not be allowed entry.';
	$MULTILANG_TitObligatorio='Required field';
	$MULTILANG_DesObligatorio='This field has been marked as mandatory. If you do not enter a value for this the system does not store the user input record.';

	//Errores y avisos varios
	$MULTILANG_TituloInsExiste='ATTENTION: The installation folder exists on the server';
	$MULTILANG_TextoInsExiste='This message appears permanently to all users as you do not delete the directory used for the installation of Practico. It is essential that the folder is deleted after the end of an installation to prevent any anonymous user initiate the process again overwritting configuration files or databases with information of importance to you<br><br>If you have already completed an install of Practico for use in production is important to remove this folder before proceeding. If you want to delete this folder you can choose to rename in temporary or trial. <br> <br> If you are viewing this message when running this script for the first time and want to make a new installation, you can launch the wizard <input type="button" Value="clicking HERE" Onclick="document.location=\'ins\'" class="BotonesCuidado"> ';
	$MULTILANG_ErrorTiempoEjecucion='RunTime Error';
	$MULTILANG_ErrorModulo='Main module is trying to include a module located in <b>mod/</b> but Practico can not find your access point. <br> Check the module status, consult your administrator or delete the conflicting module to avoid this message.';
	$MULTILANG_ContacteAdmin='Contact your system administrator and report this post.';
	$MULTILANG_ReinicieWeb='Please make the required settings and restart your web service.';
	$MULTILANG_PHPSinSoporte='Your PHP installation appears to have no support';
	$MULTILANG_ErrExtension='PHP Extension missing, disabled or a module is required';
	$MULTILANG_ErrLDAP=$MULTILANG_PHPSinSoporte.' LDAP support is required for use as external authentication method.<br>'.$MULTILANG_ReinicieWeb.'.<br>The admin user authentication will remain independent to avoid loss of access.';
	$MULTILANG_ErrHASH=$MULTILANG_PHPSinSoporte.' HASH support is required.<br>This extension is required if you selected a different encryption type for passwords on engines up external authentication.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrSESS=$MULTILANG_PHPSinSoporte.' sessions support is required. '.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrGD=$MULTILANG_PHPSinSoporte.' GD Graphics Library is required.<br>Those who are using debian, ubuntu or its derivatives can try a <b> apt-get install php5-gd </ b> to add it.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrCURL=$MULTILANG_PHPSinSoporte.' cURL Library is required.<br>Those who are using debian, ubuntu or its derivatives can try a <b> apt-get install php5-gd </ b> to add it.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrSimpleXML=$MULTILANG_PHPSinSoporte.' SimpleXML Library is required.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrPDO=$MULTILANG_PHPSinSoporte.' PDO support is required.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrDriverPDO=$MULTILANG_PHPSinSoporte.' for PDO. '.$MULTILANG_ReinicieWeb;
	$MULTILANG_ObjetoNoExiste='The object associated with this request does not exist.';
	$MULTILANG_ErrorDatos='Problem in the input data';
	$MULTILANG_ErrorTitAuth='<blink>ACCESS DENIED!</blink>';
	$MULTILANG_ErrorDesAuth='The credentials supplied for access to the system were not accepted. Some common causes are:<br><li> The username or password is incorrect. <br> <li> Security code entered incorrectly. <br> <li> Your Login is disabled. <br> <li> Account locked access by multiple attempts with incorrect password.';
	$MULTILANG_ErrorSoloAdmin='Only admin user can see the transaction details with debug mode turned On';
	$MULTILANG_ErrGoogleAPIMod='OAuth2 for Google was configured as default auth method.<br>Anyway the Practicos module for google-api is not installed yet.<br>Please download the google-api module from Practicos website and reload again.';

	//Asistente disenador aplicaciones
	$MULTILANG_DesAppBoton='Application design';
	$MULTILANG_TitDisenador='Designing the application <b>is simple and fast:</b>';
	$MULTILANG_DefTablas='Table Definition';
	$MULTILANG_DesTablas='Tables are those structures in which information is stored using forms associated with them.';
	$MULTILANG_DefForms='for data entry and querying info';
	$MULTILANG_DesForms='They allow the user to enter information according to certain validations or formats, consult or even delete records. Display also allow other elements such as pages or predesigned reports.';
	$MULTILANG_DefInformes='(graphics or tables)';
	$MULTILANG_DesInformes='They present existing information within tables to users in different formats and filters defined. You can create tabular or chart type and subsequently also be embedded in other spaces.';
	$MULTILANG_DefMenus='for the users';
	$MULTILANG_DesMenus='Link objects designed as forms or reports with graphical icons and text descriptions that may be selected by a user with that permission. It also allows you to link external functions or custom command execution.';
	$MULTILANG_UsuariosPermisos='Users and Permissions';
	$MULTILANG_DefUsuarios='to access your application';
	$MULTILANG_DesUsuarios='Sets the access credentials for each user, and the permissions available to each to access forms, reports or any previously defined menu options.';

	//Cierre de sesion
	$MULTILANG_SesionCerrada='Your session has been closed';
	$MULTILANG_TituloCierre='This can result from actions taken by the user like';
	$MULTILANG_ExplicacionCierre='<li>Close your session voluntarily</li>
			<li>Stop using the system for a long time</li>
			<li>Having multiple windows open at the same time system in restricted sections by admin</li>
			<li>Your username or password is invalid for further operation</li>
			<li>Navigate using links or other buttons than those permitted</li>
			<font color="#000000">
			<br><strong>Also for configurations or actions on your computer like:</strong><br>
			<font color="#808080">
			<li>Your browser is not supporting cookies</li>
			<li>Cleaned cache of browser cookies or sessions while using the system</li>
			<font color="#000000">
			<br><strong>System configurations also like:</strong><br>
			<font color="#808080">
			<li>You have completed an installation process of the platform requires a restart of session</li>
			<li>The SignKey of the user does not corresponds to the key required by this system</li>
			<li>The credentials to sign an operation are not valid</li>';

	//Actualizacion de plataforma
	$MULTILANG_ActMsj1='ATTENTION: Please read this information before continuing';
	$MULTILANG_ActMsj2='Pr&aacute;ctico provides this mechanism to implement automatic updates to your system with incremental patches downloaded from the official website or by project wizard for updates, however, before applying any patch is essential that:<br><br>
			<li>Make a backup of your databases. Some updates may require modification of structures on the basis of data information that may affect.
			<li>Back up your files or Practico folder.
			<li>CLEAN the Practico working folder (path tmp /) it will be used by the wizard to decompress and scan files.';
	$MULTILANG_ActUsando='Currently you are using version';
	$MULTILANG_ActPaquete='Package / Manual update Patch';
	$MULTILANG_ActSobreescritos='Previous files will be overwritten';
	$MULTILANG_CargarArchivo='Upload file';
	$MULTILANG_Adjuntando='Attaching a new file to the system';
	$MULTILANG_ErrorTamano='<b> WARNING: </b> interrupted process. The file exceeds the size limit';
	$MULTILANG_ErrorFormato='<b> WARNING: </b> interrupted process. The format of the uploaded file is not valid';
	$MULTILANG_CargaCorrecta='The file has been uploaded correctly';
	$MULTILANG_ErrorDesconocido='<b> WARNING: </b> An unknown error occurred while uploading the file';
	$MULTILANG_ErrorDescomprimiendo='Unpacking file';
	$MULTILANG_ContenidoParche='File contents';
	$MULTILANG_ErrorVerAct='Error loading the current version of Practico. File not found';
	$MULTILANG_ErrorActualiza='The uploaded file does not appears to be a valid upgrade package. File not found';
	$MULTILANG_ErrorAntigua='The uploaded patch file references a oldest update that your current version';
	$MULTILANG_ErrorVersion='The uploaded patch file requires the following version';
	$MULTILANG_AvisoIncremental='You must first apply incremental patches required to raise their minimum system version that requires patch.';
	$MULTILANG_Integridad='Integrity';
	$MULTILANG_ResumenParche='Summary of changes and functionalities provided by the patch';
	$MULTILANG_ResumenInstrucciones='Instructions to be executed on system tables';
	$MULTILANG_FinRevision='REVIEW PROCESS FINISHED';
	$MULTILANG_ActMsj3='In applying the above listed files will upgrade your system to the next version';
	$MULTILANG_ActErrGral='File structure, type or version unsupported';
	$MULTILANG_ActDesde='Updating from version';
	$MULTILANG_ErrLista='Error loading list of files to backup';
	$MULTILANG_HaciendoBkp='Making backup';
	$MULTILANG_ErrBkpBD='An error occurred during the database backup';
	$MULTILANG_ActMsj4='If any of the files could not be written by this wizard by permissions issues, the patch can also be applied manually by the administrator or by copying only files missing';
	$MULTILANG_ActMsj5='File structure or type unsupported';
	$MULTILANG_ActAlertaVersion='There is a new version of Practico available to download.<br>We recomend you to download the new version or upgrade package from the oficial website and upgrade your system to have the new features.';
	$MULTILANG_ActBuscarVersion='Look for new versions automatically';

	//Formularios
	$MULTILANG_ErrFrmDuplicado='Failed duplicated value (the) field (s). The value you entered already exists in the database. Field(s): ';
	$MULTILANG_ErrFrmObligatorio="You forgot to enter mandatory field: ";
	$MULTILANG_ErrFrmDatos='There is a problem in the input data';
	$MULTILANG_ErrFrmCampo1='You must enter a valid title or label for the field.';
	$MULTILANG_ErrFrmCampo2='You must enter a valid field to link to the data table associated with the form.';
	$MULTILANG_ErrFrmCampo3='You must enter a valid title or label for the button.';
	$MULTILANG_ErrFrmCampo4='You must enter a valid action to be executed when control is activated.';
	$MULTILANG_FrmMsj1='Add an item to the form';
	$MULTILANG_FrmTipoObjeto='Type of object to add';
	$MULTILANG_FrmTipoTit1='Data Controls';
	$MULTILANG_FrmTipo1='Short text field';
	$MULTILANG_FrmTipo2='Free/Unlimited text field';
	$MULTILANG_FrmTipo3='Richly formatted text field';
	$MULTILANG_FrmTipo4='Selection field (ComboBox dropdown list)';
	$MULTILANG_FrmTipo5='Selection field (RadioButton)';
	$MULTILANG_FrmTipoTit2='Presentation and other content';
	$MULTILANG_FrmTipo6='Rich Text (as a label)';
	$MULTILANG_FrmTipo7='Wrapper (iFrame)';
	$MULTILANG_FrmTipoTit3='Internal objects';
	$MULTILANG_FrmTipo8='Report predesigned (Data Table or Graph)';
	$MULTILANG_FrmTipo9='Slider (numeric range selector - HTML5)';
	$MULTILANG_FrmTipo10='Password field';
	$MULTILANG_FrmValorMinimo='Minimum value';
	$MULTILANG_FrmValorMaximo='Maximum value';
	$MULTILANG_FrmValorSalto='Step value';
	$MULTILANG_FrmTitValorSalto='How many units jump the slider on each movement?';
	$MULTILANG_FrmTitulo='Title or Tag';
	$MULTILANG_FrmDesTitulo='Text that will appear next to the field telling the user the information that must be entered. You can use basic HTML to additional format.';
	$MULTILANG_FrmCampo='Linked field';
	$MULTILANG_FrmCampoOb1='Mandatory field for data binding controls';
	$MULTILANG_FrmDesCampo='Field data table which will link information';
	$MULTILANG_FrmValUnico='Single value field';
	$MULTILANG_FrmTitUnico='Uniqueness for input values';
	$MULTILANG_FrmDesUnico='Indicates whether the field can store or repeated values ​​in the database. Should be enabled for fields representing primary keys in their Design and disabled for the rest';
	$MULTILANG_FrmPredeterminado='Default value';
	$MULTILANG_FrmDesPredeterminado='Sets the value that appears automatically filled in the field to open the form view. This value can be out of data validation';
	$MULTILANG_FrmValida='Data validation';
	$MULTILANG_FrmValida1='Numbers only 0-9';
	$MULTILANG_FrmValida2='Only letters A-Z';
	$MULTILANG_FrmValida3='Letters and numbers';
	$MULTILANG_FrmValida4='Date field';
	$MULTILANG_FrmValidaDes='Filter type to be applied when the user enters information by keyboard';
	$MULTILANG_FrmLectura='Read only field';
	$MULTILANG_FrmTitLectura='Defines whether you can change its value or not';
	$MULTILANG_FrmDesLectura='Property useful for fields or forms from the user query which is required to display the value but not allow modification';
	$MULTILANG_FrmAyuda='Help title';
	$MULTILANG_FrmDesAyuda='Text that will appear as a header for the field help text explaining to the user what to enter';
	$MULTILANG_FrmTxtAyuda='Help text';
	$MULTILANG_FrmDesTxtAyuda='Full Text with summary function description for the field. You can include formatting instructions, warnings or any other message to the user';
	$MULTILANG_FrmDesPeso='Position in which the field appears on the form when it is displayed on screen. Order.';
	$MULTILANG_FrmDesColumna='Column to locate the field when the form view has multiple columns. Those fields larger than the defined columns in the form will not be drawn';
	$MULTILANG_FrmObligatorio='Mandatory';
	$MULTILANG_FrmVisible='Visible';
	$MULTILANG_FrmDesVisible='Determines whether the control is visible or not to the user. If left control is not used but as a hidden';
	$MULTILANG_FrmLblBusqueda='Use for record search? Label';
	$MULTILANG_FrmTitBusqueda='Indicates whether the field is used to search for records';
	$MULTILANG_FrmDesBusqueda='Leave blank to indicate that it is a normal field or enter the label that should go in the command button located on the right side to make the search for records';
	$MULTILANG_FrmAjax='Use AJAX to search';
	$MULTILANG_FrmTitAjax='Record Recovery Mode';
	$MULTILANG_FrmDesAjax='When the box is turned on, Practico attempts to retrieve the log information to the form using AJAX (Recommended enable), otherwise using the standard method for sending request and page reload with the results . It can be disabled to improve compatibility with older browsers.';
	$MULTILANG_FrmTeclado='Add virtual keyboard';
	$MULTILANG_FrmTitTeclado='Allow data entry by on-screen keyboard';
	$MULTILANG_FrmDesTeclado='When enabled on the form displays a virtual keyboard for entering information,. For now the keyboard use may violate validations';
	$MULTILANG_FrmAncho='Width';
	$MULTILANG_FrmTitAncho='How wide should occupy space control';
	$MULTILANG_FrmDesAncho='IMPORTANT: in characters number for simple text fields and pixels rich-text fields. Enter a number of columns, however, note that the width in pixels will vary according to the type of font used by the current theme';
	$MULTILANG_FrmDesAncho2='Minimum recommended for rich-text format fields: 350';
	$MULTILANG_FrmAlto='Height (lines)';
	$MULTILANG_FrmTitAlto='How many rows should be visible in the control?';
	$MULTILANG_FrmDesAlto='IMPORTANT: the number of rows for simple text or in pixels for rich-text formatting. If the text exceeds the number of rows are automatically added scrollbars';
	$MULTILANG_FrmDesAlto2='Minimum recommended format fields: 100';
	$MULTILANG_FrmBarra='Formatting bar';
	$MULTILANG_FrmBarraTipo1='Basic: Document, character and paragraph formatting';
	$MULTILANG_FrmBarraTipo2='Standard: Basic + links and font styles';
	$MULTILANG_FrmBarraTipo3='Extended: Standard + clipboard, search-replace and spelling';
	$MULTILANG_FrmBarraTipo4='Advanced: Extended + Insert objects and colors';
	$MULTILANG_FrmBarraTipo5='Full: Advanced + Forms and full screen';
	$MULTILANG_FrmTitBarra='Editor type used';
	$MULTILANG_FrmDesBarra='Indicates the type of toolbar that appears at the top of the control and the user to perform different tasks of editing. IMPORTANT: Each type of editor requires a different space on the form as it should deploy a number of icons and different options';
	$MULTILANG_FrmFila='Single row for this object?';
	$MULTILANG_FrmTitFila='Must Practico use a full row for the object?';
	$MULTILANG_FrmDesFila='Allows to display the object in a unique row of the table used in the form';
	$MULTILANG_FrmLista='Options list';
	$MULTILANG_FrmTitLista='What options are to be chosen';
	$MULTILANG_FrmDesLista='Enter a list of options separated by commas. If you need to take the options table dynamically from another application to use the Data Source fields for options. Should fill both options (fixed list and data source) the result will be the combination';
	$MULTILANG_FrmDesLista2='Commas separated';
	$MULTILANG_FrmOrigen='Options list source';
	$MULTILANG_FrmTitOrigen='You must specify the same source (table) from the list of values';
	$MULTILANG_FrmDesOrigen='From which Field are made the choices that displays the list';
	$MULTILANG_FrmTitOrigen2='What is this?';
	$MULTILANG_FrmOrigenVal='List of values source';
	$MULTILANG_FrmTitOrigenVal='You must specify the same source (table) from the list of options';
	$MULTILANG_FrmDesOrigenVal='Field from which values ​​are taken internally (to be processed) for each option in the list';
	$MULTILANG_FrmEtiqueta='Value of the label (it will be printed on the form in HTML format)';
	$MULTILANG_FrmURL='IFrame URL';
	$MULTILANG_FrmDesURL='Enter the address of the page that will be embedded in the IFrame';
	$MULTILANG_FrmInforme='Linked report';
	$MULTILANG_FrmVentana='Create a window for the object?';
	$MULTILANG_FrmDesVentana='It is NOT recommended to activate this field when you want to embed GRAPHIC type reports';
	$MULTILANG_FrmLongMaxima='Maximum length';
	$MULTILANG_FrmTit1LongMaxima='How many characters can the field store?';
	$MULTILANG_FrmTit2LongMaxima='Value between 1 and N, 0 to disable limits';
	$MULTILANG_FrmBtnGuardar='Add or update the object / field';
	$MULTILANG_FrmAgregaBot='Add buttons and actions to form';
	$MULTILANG_FrmTituloBot='Title or Tag';
	$MULTILANG_FrmDesBot='Text to appear on the button';
	$MULTILANG_FrmEstilo='Style';
	$MULTILANG_FrmEstilo1='Default - Standard button';
	$MULTILANG_FrmEstilo1b='Standard button';
	$MULTILANG_FrmEstilo2='Action button that requires to be careful';
	$MULTILANG_FrmDesEstilo='Graphical appearance for the control';
	$MULTILANG_FrmTipoAccion='Action type';
	$MULTILANG_FrmAccionT1='Internal actions';
	$MULTILANG_FrmAccionGuardar='Save data';
	$MULTILANG_FrmAccionLimpiar='Clean data';
	$MULTILANG_FrmAccionEliminar='Delete data';
	$MULTILANG_FrmAccionRegresar='Go back to desktop';
	$MULTILANG_FrmAccionCargar='Object load';
	$MULTILANG_FrmAccionT2='User defined';
	$MULTILANG_FrmAccionExterna='In personalizadas.php or any other module installed';
	$MULTILANG_FrmAccionJS='JavaScript command';
	$MULTILANG_FrmDesAccion='Command to be run when clicked control. For actions defined is personalizadas.php form data will be sent to that routine for processing';
	$MULTILANG_FrmAccionCMD='User command';
	$MULTILANG_FrmAccionDesCMD='Action name that should exists in personalizadas.php or any other module that will process the information or a JavaScript command to be executed inmediately for the App (if you need to send some parameter you could use sigle quotes to enclose them). If you need to load Practicos Objects like a forms or report you could use the same sintax used for menues items: frm:XX:Par1:Par2:ParN o inf:XX...  There is a javascript command available called ImprimirMarco(\'seccion_impresion\') that let you print the active form content.';
	$MULTILANG_FrmDesPeso='Position in which the field appears in the status bar of the form when it is displayed on screen. Order from left to right';
	$MULTILANG_FrmBotDesVisible='Determines whether the control is visible or not to the user';
	$MULTILANG_FrmRetorno='Return title';
	$MULTILANG_FrmDesRetorno='Text that will appear as a header on the desktop after performing the action indicated by the user';
	$MULTILANG_FrmTxtRetorno='Return text';
	$MULTILANG_FrmTxtDesRetorno='Full Text with description of action taken or delivered to the user message after running control';
	$MULTILANG_FrmConfirma='Confirmation Text';
	$MULTILANG_FrmDesConfirma='If its filled, Text that will appear as a popup warning control execution and waiting for user confirmation to proceed';
	$MULTILANG_FrmBtnGuardarBut='Add Action / Button';
	$MULTILANG_FrmDisCampos='General fields design';
	$MULTILANG_FrmDesObliga='Note that the required fields should be visible';
	$MULTILANG_FrmGuardaCol='Save column';
	$MULTILANG_FrmAumentaPeso='Increase weight (down)';
	$MULTILANG_FrmDisminuyePeso='Decrease Weight (up)';
	$MULTILANG_FrmHlpCambiaEstado='Change status';
	$MULTILANG_FrmAdvDelCampo='IMPORTANT: Deleting this field users can not see it and you can not undo this operation.\n'.$MULTILANG_Confirma;
	$MULTILANG_FrmTitComandos='General definition of actions and commands';
	$MULTILANG_FrmTipoAcc='Action type';
	$MULTILANG_FrmAccUsuario='User action';
	$MULTILANG_FrmOrden='Command';
	$MULTILANG_FrmAdvDelBoton='IMPORTANT: When removing the button / action users can not view or run the command associated with this and you can not undo this operation later.\n'.$MULTILANG_Confirma;
	$MULTILANG_FrmObjetos='Objects and Data Fields';
	$MULTILANG_FrmDesObjetos='Add an object or data field';
	$MULTILANG_FrmDesCampos='Fields general design';
	$MULTILANG_FrmAcciones='Actions, buttons and commands';
	$MULTILANG_FrmDesBoton='Add button or action';
	$MULTILANG_FrmDesAcciones='General definition of actions';
	$MULTILANG_FrmVolverLista='Back to list of forms';
	$MULTILANG_FrmErr1='You must enter a valid title for the form.';
	$MULTILANG_FrmErr2='Please specify a valid name for the data table associated with the form.';
	$MULTILANG_FrmAgregar='Add New Form';
	$MULTILANG_FrmActualizar='Update initial configurations';
	$MULTILANG_FrmDetalles='Define the form details';
	$MULTILANG_FrmTitVen='Window title';
	$MULTILANG_FrmDesTit='Text that appears at the top of the window';
	$MULTILANG_FrmHlp='Help Title';
	$MULTILANG_FrmDesHlp='Text that will appear as a caption for the support of the form';
	$MULTILANG_FrmTxt='Help Text';
	$MULTILANG_FrmDesTxt='Full Text with summary function description for the form. Introductory text for any user';
	$MULTILANG_FrmImagen='Help icon';
	$MULTILANG_FrmNumeroCols='Number of columns';
	$MULTILANG_FrmDesNumeroCols='Indicates how many columns to be deployed in fields when the form is loaded';
	$MULTILANG_FrmCreaDisena='Create and design';
	$MULTILANG_FrmTitForms='Forms defined in the system';
	$MULTILANG_FrmCamposAcciones='Fields and actions';
	$MULTILANG_FrmAdvDelForm='IMPORTANT: Deleting the form users can not access it again to query operations or data entry defined. You can not undo this operation. This also eliminates any internal design of the form.\n'.$MULTILANG_Confirma;
	$MULTILANG_FrmAdvScriptForm='Scripts edit (Advanced)';
	$MULTILANG_FrmHlpFunciones='All JavaScript functions defined here will be included in the form.<br>If you need some additional events linked by buttons or any object in the form<br> this field let you define them.<br><b>When you need to use parameters or any quote use always double quotes!</b>.<br>The FrmAutoRun function must be exist (even empty) cause it will be executed automatically on every form load.';
	$MULTILANG_FrmCopiar='Make a copy';
	$MULTILANG_FrmAdvCopiar='A new copy of this will be created.  Are you sure?';
	$MULTILANG_FrmMsjCopia='Now you can go to edit your new form.  A copy was maded as: ';
	
	//Informes
	$MULTILANG_InfErr1='You must specify values ​​for the fields corresponding to at least one data series. <br> If you dont want to generate a graph then you must change the report type to data table';
	$MULTILANG_InfErr2='You must enter a valid title for the report.';
	$MULTILANG_InfErr3='Please specify a valid name for the category associated to the report.';
	$MULTILANG_InfErrCondicion='The specified condition is invalid or lacks at least one side for comparison.';
	$MULTILANG_InfErrCampo='You must enter a valid field name for the data source of the report.';
	$MULTILANG_InfErrTabla='You must enter a valid table name for the data source of the report.';
	$MULTILANG_InfErr4='You must enter a valid title or label for the button.';
	$MULTILANG_InfErr5='You must enter a valid action to be executed when control is activated.';
	$MULTILANG_InfAgregaTabla='Add a new table to the report';
	$MULTILANG_InfTablaManual='Enter a table manually';
	$MULTILANG_InfDesTablaManual='If you dont want to select a table from top list, you could type here a table name.  This option is useful when you need to access information in internal tables of Practico or tables created by other applications';
	$MULTILANG_InfAliasManual='Specify an alias manually';
	$MULTILANG_InfDesAliasManual='Useful to define the name of a table generated from a subquery or manually specified';
	$MULTILANG_InfBtnAgregaTabla='Add Table';
	$MULTILANG_InfTablasDef='Tables defined in this report';
	$MULTILANG_InfAlias='Alias';
	$MULTILANG_InfAdvBorrado='IMPORTANT: If you delete the selected object the query or report could be inconsistent.\n'.$MULTILANG_Confirma;
	$MULTILANG_InfAgregaCampo='Add a new field to the report';
	$MULTILANG_InfCampoDatos='Data Field';
	$MULTILANG_InfCampoManual='Specify a field manually';
	$MULTILANG_InfDesCampoManual='If you dont want to select a field from top list you could type here a field name.  This option is useful when you need to access information in Practico internal fields or fields created by other applications';
	$MULTILANG_InfDesAliasManual2='Useful to define the name of a field generated manually or a agrupated subquery';
	$MULTILANG_InfBtnAgregaCampo='Add Field';
	$MULTILANG_InfCamposDef='Fields defined in this report';
	$MULTILANG_InfAddCondicion='Add a new condition to the report';
	$MULTILANG_InfPrimer='First field or value';
	$MULTILANG_InfOperador='Comparison operator';
	$MULTILANG_InfSegundo='Second field or value';
	$MULTILANG_InfMayorQue='Greater than ';
	$MULTILANG_InfMenorQue='Less than';
	$MULTILANG_InfMayorIgualQue='Greater than or equal';
	$MULTILANG_InfMenorIgualQue='Less than or equal';
	$MULTILANG_InfDiferenteDe='Different';
	$MULTILANG_InfIgualA='Equal';
	$MULTILANG_InfDesManual='In any manual fields you can enclose expressions or character string values ​​using double quotes';
	$MULTILANG_InfOperador='Add an aggregator of expressions or a logical operator ';
	$MULTILANG_InfOpParentesisA='Parenthesis open';
	$MULTILANG_InfOpParentesisC='Parenthesis close';
	$MULTILANG_InfOpAND='AND logical';
	$MULTILANG_InfOpOR='OR logical';
	$MULTILANG_InfOpNOT='NOT';
	$MULTILANG_InfOpXOR='XOR';
	$MULTILANG_InfTitOp='When to use this option?';
	$MULTILANG_InfDesOp='If you require more than one sentence to add to its status filtering group results or require several conditions to take precedence over some operations then you can use this option. Works independently and must be added as a separate record of the consultation';
	$MULTILANG_InfReco1='Advice';
	$MULTILANG_InfReco2='Do not forget to add ANDs followed each condition linking foreign keys between different tables of the report where applicable (usually when you use more than one table).';
	$MULTILANG_InfBtnAddCondic='Add condition / operator';
	$MULTILANG_InfDefCond='Filter and conditions defined in this report';
	$MULTILANG_InfTitGrafico='Specifies types of charts to be generated by the report';
	$MULTILANG_InfSeriesGrafico1='SERIES FOR THE CHART';
	$MULTILANG_InfSeriesGrafico2='Multiple series charts must return the same number of labels';
	$MULTILANG_InfNomSerie='Series Name';
	$MULTILANG_InfCampoEtiqSerie='Label Field';
	$MULTILANG_InfCampoValor='Value field (must be numeric)';
	$MULTILANG_InfVistaGrafico1='APPEARANCE and DISTRIBUTION';
	$MULTILANG_InfVistaGrafico2='Select according to the number of desired series';
	$MULTILANG_InfTipoGrafico='Chart type';
	$MULTILANG_InfGrafico1='Horizontal Bars';
	$MULTILANG_InfGrafico2='Horizontal Bars (multiple series)';
	$MULTILANG_InfGrafico3='Line chart';
	$MULTILANG_InfGrafico4='Line chart (multiple series)';
	$MULTILANG_InfGrafico5='Vertical Bars';
	$MULTILANG_InfGrafico6='Vertical Bars (multiple series)';
	$MULTILANG_InfGrafico7='Pie chart (only one series)';
	$MULTILANG_InfActGraf='Update chart format';
	$MULTILANG_InfAgrupa='Specifies sorting criteria and grouping';
	$MULTILANG_InfReco3='Use only fields defined in your query.';
	$MULTILANG_InfCriterioAgrupa='Grouping criteria';
	$MULTILANG_InfCriterioOrdena='Ordering criteria';
	$MULTILANG_InfTitAgrupa='How the results will be grouped?';
	$MULTILANG_InfDesAgrupa='Use this option only if your report handles operations such as sum, average or count within the fields displayed. Eg SUM (field), AVG (field), COUNT (*). In that cases enter which fields (separated by comma) should group the results';
	$MULTILANG_InfTitOrdena='How the results will be sorted?';
	$MULTILANG_InfDesOrdena='To sort the results using any of the fields added. Fields must be separated by commas to sort your results, if you wish after each field can use the modifier ASC or DESC to indicate whether ascendant or descending';
	$MULTILANG_InfActCriterios='Reload sorting and grouping criteria';
	$MULTILANG_InfTitBotones='Add buttons or actions to each record';
	$MULTILANG_InfDelReg='Delete Record';
	$MULTILANG_InfCargaForm='Load a form by ID';
	$MULTILANG_InfHlpAccion='If you want to load a form use this sintax  ID:1:FieldForSearch<br>To delete the associated record type the table.field used to compare it.';
	$MULTILANG_InfVinculo='Linked field';
	$MULTILANG_InfDesVinculo='IMPORTANT: We assume the first field or column as a single and primery key value<br>
				to do removal or form opening operations.<br>
				It is recommended to use fields that has a really single value<br>
				unless you are wishing group operations.';
	$MULTILANG_InfDesPeso='Position on the button that appears within the set on the right side of each record. Order from left to right.';
	$MULTILANG_InfFiltrar='Filter results by specific conditions';
	$MULTILANG_InfCampoAgrupa='Let you grouping Sets fields for reporting operations sum, average or count and fields for the ordering of results';
	$MULTILANG_InfTablasOrigen='Source data tables';
	$MULTILANG_InfCamposOrigen='Data Fields';
	$MULTILANG_InfCondiciones='Conditions';
	$MULTILANG_InfPropGraf='Chart Properties';
	$MULTILANG_InfDesGraf='Defines the properties and appearance of the chart displayed by the report';
	$MULTILANG_InfDesAccion='Defines actions that can be performed on each record displayed by the report as Delete, Open a form, user functions, etc..';
	$MULTILANG_InfVolver='Back to list of reports';
	$MULTILANG_InfTitulo='Title of the report or chart';
	$MULTILANG_InfDesTitulo='Text that appears at the top of the generated report';
	$MULTILANG_InfDescripcion='Description';
	$MULTILANG_InfDesDescrip='Descriptive text of the report. Not in his generation but is used to guide the user in his selection';
	$MULTILANG_InfCategoria='Category';
	$MULTILANG_InfDesCateg='When the user accesses the system panel reports these are classified by categories. Enter here a category name under which you want to publish this report to the users.';
	$MULTILANG_InfNivelUsuario='User Level';
	$MULTILANG_InfTodoUsuario='All users';
	$MULTILANG_InfParam='Edit general settings of the report';
	$MULTILANG_InfTitNivel='Who can see this report?';
	$MULTILANG_InfDesNivel='Specify the user profile must be to see this report as available.';
	$MULTILANG_InfAlto='Heigth';
	$MULTILANG_InfTitAncho='Set fixed width?';
	$MULTILANG_InfDesAncho='This value also applies if you have specified a Height value. If you require the report to appear within a specified fixed width size in pixels, leave blank to be deployed data without size restrictions. In the case of chart image specifies its size.';
	$MULTILANG_InfTitAlto='Set fixed height?';
	$MULTILANG_InfDesAlto='This value also applies if you have specified a Width value. If you require the report to appear within a specified fixed width size in pixels, leave blank to be deployed data without size restrictions. In the case of chart image specifies its size.';
	$MULTILANG_InfHlpAnchoalto='Add a <b>px</b> or <b>%</b> as you need';
	$MULTILANG_InfFormato='Final format';
	$MULTILANG_InfTitFormato='How this report is displayed?';
	$MULTILANG_InfDesFormato='Indicates whether the final product will be a report of the data table or a chart.';
	$MULTILANG_InfActualizar='Refresh Report';
	$MULTILANG_InfVistaPrev='Report Preview';
	$MULTILANG_InfCargaPrev='Load preview';
	$MULTILANG_InfHlpCarga='This option will close the design mode <br> and will show you the report as it will be displayed <br> to a user of the application';
	$MULTILANG_InfErrInforme1='You must enter a valid title for the report.';
	$MULTILANG_InfErrInforme2='Please specify a valid name for the category associated with report.';
	$MULTILANG_InfTituloAgr='Add new report or chart';
	$MULTILANG_InfDetalles='Define the details of the report / chart';
	$MULTILANG_InfDefinidos='Reports / charts already defined in the system';
	$MULTILANG_InfcamTabCond='Fields, Tables and Conditions';
	$MULTILANG_InfAdvEliminar='IMPORTANT: Deleting this report users can not access it again. You can not undo this operation. This also eliminates any internal design of the report.\n'.$MULTILANG_Confirma;
	$MULTILANG_InfErrTamano='The report you are trying to generate is a graph type  report but the designer did not specify the height and width of the resulting graph.<br>Should provide an valid size of graphic to generate an image.';
	$MULTILANG_InfGeneraPDF='PDF Export?';
	$MULTILANG_InfGeneraPDFInfoTit='Available for tabular reports only';
	$MULTILANG_InfGeneraPDFInfoDesc='This option requires the PDF generator module that is available in downloads link at Practicos website. If you activate this option the report time could be more than a normal report when you have a lot of records in your results';

	//Menus
	$MULTILANG_MnuTitEditar='Edit menu item';
	$MULTILANG_MnuSelImagen='Click on an image to select';
	$MULTILANG_MnuPropiedad='Item properties';
	$MULTILANG_MnuApariencia='APPEARANCE AND LOCATION CONFIGURATION';
	$MULTILANG_MnuTexto='Text';
	$MULTILANG_MnuPadre='Father';
	$MULTILANG_MnuSiAplica='If applies';
	$MULTILANG_MnuUbicacion='Location of this option';
	$MULTILANG_MnuArriba='TopMenu Possible?';
	$MULTILANG_MnuEscritorio='Desktop Possible?';
	$MULTILANG_MnuCentro='Middle Possible?';
	$MULTILANG_MnuSeccion='Section';
	$MULTILANG_MnuDesArriba='You must enable this option to be displayed in the top menu-bar horizontally?';
	$MULTILANG_MnuDesEscritorio='You must enable this option to be displayed as an icon on the users desktop?';
	$MULTILANG_MnuDesCentro='You must enable this option to be deployed in the central part of the application, within windows classified / grouped by the value defined in the Section field?';
	$MULTILANG_MnuDesImagen='Display a list of images available on the system';
	$MULTILANG_MnuComandos='CONFIGURATION COMMANDS AND ACTIONS';
	$MULTILANG_MnuClic='Possible to click?';
	$MULTILANG_MnuURL='Static URL';
	$MULTILANG_MnuTitURL='Bring to a URL or execute a javascript?';
	$MULTILANG_MnuDesURL='Enter full URL or a command defined javascript javascript: command to be replaced within an anchor HREF generated around the object';
	$MULTILANG_MnuTipo='Command type';
	$MULTILANG_MnuInterno='Internal';
	$MULTILANG_MnuPersonal='Personal';
	$MULTILANG_MnuObjeto='Object';
	$MULTILANG_MnuAccion='Internal action / command / object';
	$MULTILANG_MnuTitAccion='Type one of three possible values ​​as follows:';
	$MULTILANG_MnuDesAccion='1) AN OBJECT in Pr&aacute;ctico that you want to link to this menu option using this sintax frm:XXX  or  inf:XXX  where you should replace XXX with the object ID (ID form or ID for the report),  2) INTERNAL ACTION in Pr&aacute;ctico where you want to redirect the user (you can see in Practicos footer as admin), or 3) CUSTOM COMMAND: A command secuence defined by the user, this secuence should exists in personalizadas.php file or any other module installed.';
	$MULTILANG_MnuTitNivel='Who can see this option?';
	$MULTILANG_MnuDesNivel='Specify the user profile must be to see this option available.';
	$MULTILANG_MnuActualiza='Reload menu';
	$MULTILANG_MnuErr='It requires at least the text field.';
	$MULTILANG_MnuAdmin='Main menu administration';
	$MULTILANG_MnuAgregar='Add menu option';
	$MULTILANG_MnuDefinidos='Sections and menu commands defined';
	$MULTILANG_MnuNivel='Level';
	$MULTILANG_MnuComando='Command';
	$MULTILANG_MnuAdvElimina='IMPORTANT: Deleting this registry you could unlink some system options.\n'.$MULTILANG_Confirma;

	//Objetos, seguridad y otros
	$MULTILANG_ObjError='The type of object received in this command is unknown';
	$MULTILANG_SecErrorTit='Commands & reports security control';
	$MULTILANG_SecErrorDes='You have attempted to execute a function, command or report for which you are unauthorized.<br>System will be taking an audit log:';
	
	//Tablas
	$MULTILANG_TblError1='Design integrity problem';
	$MULTILANG_TblError2='DATABASE ERROR';
	$MULTILANG_TblError3='During the execution engine has returned the following message';
	$MULTILANG_TblAgrCampo='Add fields in the data table';
	$MULTILANG_TblAgrCampoTabla='Add a field to the table';
	$MULTILANG_TblEntero='Integer';
	$MULTILANG_TblCadena='String (Max length 255)';
	$MULTILANG_TblTexto='Text (Unlimited)';
	$MULTILANG_TblFecha='Date (without time)';
	$MULTILANG_TblTitNombre='Format help for field name';
	$MULTILANG_TblDesNombre='Field name without dashes, dots, spaces or special characters';
	$MULTILANG_TblLongitud='Length';
	$MULTILANG_TblAutoinc='Autoincrement';
	$MULTILANG_TblDesLongitud='This field may be mandatory depending on the type of data to be stored, such as type String fields';
	$MULTILANG_TblDesLongitud2='Format: If you ever need to put a backslash (backslash) or a single quote between these values​​, always place an additional backslash (backslash). For enum fields or set, use the format: \'a\',\'b\',\'c\'...';
	$MULTILANG_TblTitAutoinc='Primary key alert';
	$MULTILANG_TblDesAutoinc='This value can be defined only by advanced administrators who have been removed for some reason the default autoincrement ID field';
	$MULTILANG_TblNulos='Allow null value?';
	$MULTILANG_TblDefUsuario='User-defined';
	$MULTILANG_TblNulo='Null';
	$MULTILANG_TblFechaHora='Current date';
	$MULTILANG_TblDesPredet='Format: Only one value, unescaped. For strings use single quotation marks at the beginning and end';
	$MULTILANG_TblAgregando='Add the field';
	$MULTILANG_TblCamposDef='Fields already defined in the table';
	$MULTILANG_TblTipoClave='Key type';
	$MULTILANG_TblNoElim='Cant be eliminated';
	$MULTILANG_TblAdvDelCampo='IMPORTANT: Deleting the selected column of the table are also deleted all data stored in it then you can not undo this operation.\n'.$MULTILANG_Confirma;
	$MULTILANG_TblErrDel1='Error removing the table!';
	$MULTILANG_TblErrDel2='The specified table can not be deleted. Some common causes are: <br> <li> is used by any of the automated forms or reports, in that case you can try editing. <br> <li> The table has relationships defined by the designer to other data tables. <br> <li> user role defined for the active session can not delete objects in Practico';
	$MULTILANG_TblErrCrear='Please specify a valid name for the table. This must not contain dashes, dots, spaces or special characters';
	$MULTILANG_TblCrearListar='Create / List data tables defined in the system';
	$MULTILANG_TblCreaTabla='Create a new table in the database';
	$MULTILANG_TblDesTabla='A data table is a structure that allows you to store information. Enter in this field the name of the table without dashes, dots, spaces or special characters. CAPS SENSITIVE';
	$MULTILANG_TblCreaTabCampos='Create table and define fields';
	$MULTILANG_TblTitAsis='Use Wizard?';
	$MULTILANG_TblDesAsis='Lets you select from some predefined common tables';
	$MULTILANG_TblTablasBD='Tables defined in the database';
	$MULTILANG_TblRegistros='Records';
	$MULTILANG_TblAdvDelTabla='IMPORTANT: Deleting the data table are also deleted all the records stored in it then you can not undo this operation.\n'.$MULTILANG_Confirma;
	$MULTILANG_TblErrPlantilla='You must select a template from which you want to create your new table';
	$MULTILANG_TblAsistente='Table Generation Wizard';
	$MULTILANG_TblAsistNombre='Name for the new table';
	$MULTILANG_TblAsistPlant='Template selected';
	$MULTILANG_TblAsCampos='Fields containing';
	$MULTILANG_TblTotCampos='Total fields';
	$MULTILANG_TblHlpAsist='All tables and fields can be personalized in the next step, <br> adding, removing or changing the properties of those that you want.';

	//Usuarios
	$MULTILANG_UsrCopia='Permissions copy completed. Please check below.';
	$MULTILANG_UsrDesPW='Passwords with minimum safety conditions should have a length of <b>at least 8 characters</b>, numbers, uppercase and lowercase symbols such as <font color=yellow># $ * </font>. To have your password is considered safe by this system <b> must meet at least one security level of 81%</b>';
	$MULTILANG_UsrCambioPW='Change Password';
	$MULTILANG_UsrAnteriorPW='Old Password';
	$MULTILANG_UsrNuevoPW='New password';
	$MULTILANG_UsrNivelPW='Security level';
	$MULTILANG_UsrVerificaPW='Verify Password';
	$MULTILANG_UsrHlpNoPW='The authentication engine is defined for the external type tool.<br>
				The key change is disabled as it should be managed centrally<br>
				by you in the tool defined by system administrator';
	$MULTILANG_UsrErrPW1='You forgot to enter any of the requested data';
	$MULTILANG_UsrErrPW2='You have entered two different passwords';
	$MULTILANG_UsrErrPW3='The key for you entered does not meet the minimum safety recommendations';
	$MULTILANG_UsrErrInf='The user already has the selected permission';
	$MULTILANG_UsrAdmInf='User reports Administration';
	$MULTILANG_UsrAgreInf='Add a report to the user menu';
	$MULTILANG_UsrInfDisp='Available Reports';
	$MULTILANG_UsrAdvDel='IMPORTANT: Deleting the registry can be no link some system options for this user.\n'.$MULTILANG_Confirma;
	$MULTILANG_UsrAdmPer='User Rights Management';
	$MULTILANG_UsrCopiaPer='Initially make a permissions copy from the user';
	$MULTILANG_UsrDelPer='Only delete permissions';
	$MULTILANG_UsrAgreOpc='Add option to the user menu';
	$MULTILANG_UsrSecc='Sections already available';
	$MULTILANG_UsrErrCrea1='The user entered already exists, please check or change the login entered for the account and try again';
	$MULTILANG_UsrErrCrea2='You forgot to enter any of the requested data as required: Name, Login or Password';
	$MULTILANG_UsrErrCrea3='The password entered must be at least six characters';
	$MULTILANG_UsrAdicion='Adding users';
	$MULTILANG_UsrLogin='NickName / Login';
	$MULTILANG_UsrDesLogin='Unique login to identify the user in the system. CAPS SENSITIVE';
	$MULTILANG_UsrNombre='Full name';
	$MULTILANG_UsrTitCorreo='Address for alerts and notifications';
	$MULTILANG_UsrDesCorreo='E-mail of possible use for automatic notifications system in some modules';
	$MULTILANG_UsrEstado='Initial state';
	$MULTILANG_UsrNivel='Access level';
	$MULTILANG_UsrTitNivel='Initial safety profile';
	$MULTILANG_UsrDesNivel='Users security profile. CAUTION: This option is different to individual user permissions defined by the designer for the created objects. This page only applies to the internal operations of Practico';
	$MULTILANG_UsrAudit1='Tracking operations (automatically updated every 5 seconds)';
	$MULTILANG_UsrAudDes='Details of the action';
	$MULTILANG_UsrAudUsrs='Monitoring transactions for all users';
	$MULTILANG_UsrAudAccion='With the <b>action</b>';
	$MULTILANG_UsrAudUsuario='for the <b>user</b>';
	$MULTILANG_UsrAudDesde='From (Day / Month)';
	$MULTILANG_UsrAudHasta='to';
	$MULTILANG_UsrAudAno='Referring year audit';
	$MULTILANG_UsrAudIniReg='Start on record';
	$MULTILANG_UsrAudVisual='Viewing';
	$MULTILANG_UsrAudMonit='Monitoring mode';
	$MULTILANG_UsrAudHisto='History of user operations (from most recent to oldest)';
	$MULTILANG_UsrLista='List of users in the system';
	$MULTILANG_UsrLisNombre='See only users whose <strong> name </strong> contains';
	$MULTILANG_UsrLisLogin='See only users whose <strong> login </strong> contains';
	$MULTILANG_UsrFiltro='Due to the number of registered users you should filter the output.<br>
				Enter the desired filter type at the top and click the corresponding button.';
	$MULTILANG_UsrAcceso='Last access';
	$MULTILANG_UsrAdvSupr='IMPORTANT: You are going to delete the user and lose links to records associated with this, this action can not be recovered unless you recreate the user with the same credentials later.\n'.$MULTILANG_Confirma;
	$MULTILANG_UsrAddMenu='Add Menus';
	$MULTILANG_UsrAddInfo='Add Reports';
	$MULTILANG_UsrAuditoria='Audit';
	$MULTILANG_UsrAgregar='Add a User';
	$MULTILANG_UsrVerAudit='View user audit';

	//Proceso de instalacion
	$MULTILANG_Instalacion='Installation Process';
	$MULTILANG_SubtituloPractico1='WEB Application Generator';
	$MULTILANG_SubtituloPractico2='Free and cross-platform';
	$MULTILANG_InstaladorAplicacion='Application installer';
	$MULTILANG_BienvenidaInstalacion='Welcome to the installation process';
	$MULTILANG_BienvenidaDescripcion='This wizard will guide you every step of the initial configurations to use Practico as a visual environment for web application development';
	$MULTILANG_ResumenLicencia='This tool is released under GNU-GPL v2';
	$MULTILANG_AmpliacionLicencia='An online copy of this license can be found in different formats and languages ​​in the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU website</a>';
	$MULTILANG_ChequeoPreprocesador='Checking preprocessor settings';
	$MULTILANG_VistaPreprocesador='A view of your PHP configuration is available in <b> <a target="_blank" href="paso_i.php">[this link]</a>';
	$MULTILANG_CumplirRequisitos='Must meet the following';
	$MULTILANG_CumplirPDO='PDO extension enabled';
	$MULTILANG_CumplirDrivers='PDO Driver for the type of engine of your target database';
	$MULTILANG_CumplirGD='GD Extension 2 + handling of graphics and support for FreeType 2 +';
	$MULTILANG_ChequeoDirectorios1='Checking directories';
	$MULTILANG_ChequeoDirectorios2='The following files and directories must have write permissions for the application to operate correctly';
	$MULTILANG_ErrorEscritura='<b> found errors when trying to write to the installation directories! </b>: <br> rule path must belong to the user running webserver Practical scripts (usually apache <br> www, www-data or similar) and have 755 permissions for folders and 644 case for. <br> A quick way to update these permissions can be run from the root of the Practical commands: <li> find. -type d-exec chmod 755 {} \; (change all folder permissions) <li> find. -type f-exec chmod 644 {} \; (change all file permissions) <li> chown-R www-data * (assuming that www-data is the user who runs the web service)';
	$MULTILANG_ProbarNuevamente='Test again';
	$MULTILANG_ConfiguracionDescripcion='Specify the desired settings to store user applications and information generated by Practical as well as other important options of the tool. This window will be presented only once so be sure to fill out and confirm all required information';
	$MULTILANG_PuertoNoPredeterminado='(if not the default)';
	$MULTILANG_AyudaTitMotor='MySQL and MariaDB';
	$MULTILANG_AyudaDesMotor='Engines are official. Above them is the development and testing of the tool, but thanks to PDO you can use the tool in other engines you may need to make adjustments to these specific operations.';
	$MULTILANG_AyudaTitBD='The database must already exist';
	$MULTILANG_AyudaDesBD='For different engines you must have created SQLite database first. For SQLite only required to specify the file name associated with BD (eg practico.sqlite3) and Practico will try to create for you the file if you have the appropriate permissions on your web server.';
	$MULTILANG_PrefijoCore='Pr&aacute;ctico internal tables prefix';
	$MULTILANG_PrefijoApp='Application tables prefix';
	$MULTILANG_AyudaTitPreCore='NO se recomienda dejar en blanco o Mayúsculas';
	$MULTILANG_AyudaDesPreCore='';
	$MULTILANG_AyudaTitPreApp='Important';
	$MULTILANG_AyudaDesPreApp='The prefix used for application tables can be used to separate different Practical facilities on the same database or it can be left empty to link / integrate with other applications Practical pre-existing. Not recommended uppercase for compatibility between engines.';
	$MULTILANG_AyudaLlave='Sign value for user accounts';
	$MULTILANG_NotasImportantesInst1=' <u>IMPORTANT 1 </u>: The database used for Practico must already exist to connect to it and generate the required structures. Check with your hosting provider or system administrator how to create a database with sufficient privilege to work with Practico. <br> <br> <u> IMPORTANT 2 </u>: The installer will remove all existing tables on database indicated and that match the names of tables that Practico uses. If you think you may have important information in them is recommended to make a backup before proceeding. To share a single database between different Practico installations you can change the table prefixes used by each.';
	$MULTILANG_ParametrosApp='Parameters for the first application';
	$MULTILANG_ParamNombreEmpresa='Short name of your organization or company';
	$MULTILANG_ParamNombreApp='Application name';
	$MULTILANG_ParamVersionApp='Initial release version of its application';
	$MULTILANG_AyudaTitNomEmp='Name to display on top';
	$MULTILANG_AyudaDesNomEmp='This text will be used in reports and application areas that require a short name to identify your organization.';
	$MULTILANG_AyudaTitNomApp='Descriptive name';
	$MULTILANG_AyudaDesNomApp='The specified name always appears at the top of your application.';
	$MULTILANG_NotasImportantesInst2='<u>IMPORTANT</u>: Other parameters such as long and short name of your company, release date, license texts and credits will be able to be modified later in the options available for the administrator user.';
	$MULTILANG_AyudaTitCaptcha='Wordlength';
	$MULTILANG_AyudaDesCaptcha='Indicates the number of symbols used in the security word that users must enter to access the system each.';
	$MULTILANG_ModoDepuracion='Enable debug mode?';
	$MULTILANG_AyudaTitDebug='Show errors and warnings';
	$MULTILANG_AyudaDesDebug='For production sites this option should be off. When you turn on this value, Practico will show you during application execution all errors and messages that can be generated by the Hypertext Preprocessor - PHP';
	$MULTILANG_MotorAuth='Authentication engine';
	$MULTILANG_AuthPractico='Internal (Practico Tables using MD5)';
	$MULTILANG_AuthLDAP='LDAP (Directory server)';
	$MULTILANG_AuthGoogle='Google / Google+ (By OAuth2)';
	$MULTILANG_AyudaDesAuth='Using a different authentication engine Practico not preclude the creation of users of the tool. The outboard motor will serve as a method to validate the login and corresponding password as a centralized authentication method, but the other features of the profile are taken from the Practico user. The Practico password change will be disabled to be controlled only by the external motor. The admin user will always remain autonomous to keep access control configuration errors.';
	$MULTILANG_AyudaTitCript='Key encryption type used by the engine';
	$MULTILANG_AyudaDesCript='Specify the type of encryption used by the authentication system to be used. Practico will encrypt the key value entered by the user before sending the verification engine.';
	$MULTILANG_AlgoritmoCripto='Encryption Algorithm';
	$MULTILANG_Dominio='Domain';
	$MULTILANG_UO='Organizational unit or context';
	$MULTILANG_AyudaDesLdapIP='Enter the server IP address or name directory where it can be resolved.';
	$MULTILANG_AyudaDesLdapDominio='Domain used by the server. Example: This will be created midominio.com.co internal chain dc=midominio,dc=com,dc=co';
	$MULTILANG_AyudaDesLdapUO='User Context Connection. Must exist on the LDAP server, eg people, sales, marketing, etc.';
	$MULTILANG_TitInsPaso3='Writing Configuration and connecting to Database';
	$MULTILANG_DesInsPaso3='I am writing configuracion.php file located in / core with the parameters you specified and is being tested Connects to the specified database.';
	$MULTILANG_ErrorEscribirConfig='<b>Found errors when trying to write the configuration file! </b>: <br> If you want an alternative may be to change your own default values ​​contained in the file core/configuracion.php or ws_llaves.php or core/ws_oauth.php depending of your desired changes.<br> <br> You can also change file permissions for configuracion.php and try again with this wizard.';
	$MULTILANG_ErrorConexBD='<b> found errors when connecting to the database! </b>: <br> Check the values ​​entered in the previous step and try again.';
	$MULTILANG_InfoPaso3='<b> Everything seems fine with the basic configuration of PDO. </b> <br> The last step is to tell the installation wizard like trying your database:<br><br>
				<li><b>1.</b> Add data start the database, this includes the initial user (admin), menus and other records on Practico Core tables. This is the best choice for new installations.
				<li><b>2.</b> Leave the database as it is, indicating that no operation is to be executed on the database. This option is useful when trying to install over an existing database that contains applications designed and active users. It can also be understood as a blank database for new installations will not even users to access and options to select.';
	$MULTILANG_BtnAplicarBD='1. Add initial info to the BD';
	$MULTILANG_BtnNoAplicarBD='2. Do not modify the BD connected';
	$MULTILANG_ExeScripts='Running database scripts (if applicable)';
	$MULTILANG_ErrorScripts='Error executing the query on the database';
	$MULTILANG_IrInstalacion='Go to your Practico installation';
	$MULTILANG_Totalejecutado='Total queries executed';
	$MULTILANG_MsjFinal1='If this is a new installation can enter the system through <b> credentials admin / admin </ b> and change then as you desire.';
	$MULTILANG_MsjFinal2='Remember to completely remove the installation directory (folder / ins) </b> </u> to prevent other person run these scripts again on a production system can cause any damage.';
	$MULTILANG_MsjFinal2='Summary of operations executed';
	$MULTILANG_AuthLDAPTitulo='LDAP based login';
	$MULTILANG_AuthOauthPlantilla='Template user';
	$MULTILANG_AuthOauthId='Client ID';
	$MULTILANG_AuthOauthSecret='Client Secret';
	$MULTILANG_AuthOauthURI='Redirect URI';
	$MULTILANG_OauthTitURI='Before you continue, you should register a new application with the provider to obtain an ID, Secret and URI to config the auth service.  The URI to register is calculated automatically by Practico in each URI field for this form.';
	$MULTILANG_OauthDesURI='Important: Your return URI should be under a domain or public IP because your provider will need to link with that. This URI is automatically created acording to the path during installation time.  Clic over each providers logo to go to their API registration website.';
	$MULTILANG_BuscarActual='Search for upgrades automatically';
	$MULTILANG_DescActual='Search randomly on admin logins to check for new Practicos versions.  This option could turn a little slower admin loads while checks for new versions';

	//API-Webservices
	$MULTILANG_WSErrTitulo='Practico WebServices - Error';
	$MULTILANG_WSErr01='[Cod. 01] Invalid key';
	$MULTILANG_WSErr02='[Cod. 02] KEYs definition file does not found';
	$MULTILANG_WSErr03='[Cod. 03] WebServices functions file does not found';
	$MULTILANG_WSErr04='[Cod. 04] Webservice consumers key is empty or null. Check the value you sent or your Practico installation process.';
	$MULTILANG_WSErr05='[Cod. 05] The service identifier, function or method could not be executed, is uknown or is empty.';
	$MULTILANG_WSConfigButt='WebServices keys';
	$MULTILANG_WSLlavesDefinidas='<b>WebServices consumer Keys</b> (one each line)';
	$MULTILANG_WSLlavesAyuda='Those are the webservices keys that you allow to use Pr&aacute;ctico Webservices or user custom services.  It is not necessary to add your setup pass key cause it is allowed by default.';
	$MULTILANG_WSLlavesAgregar='Add random key';
	
	//OAuth
	$MULTILANG_OauthButt='OAuth Autentication';
	$MULTILANG_ProtoTransporte='Prefered transport protocol';
	$MULTILANG_ProtoTransAUTO='Autodetect by URL';
	$MULTILANG_ProtoTransHTTP='HTTP standard';
	$MULTILANG_ProtoTransHTTPS='HTTP secured';
	$MULTILANG_ProtoDescripcion='Autodetect will check URLs used to access and will enable or disable SSL,  HTTP standard allow people with self-signed certs to connect with the Practicos auth webservice.  This is an unsafe mode but very effective if you need to access.   HTTP Secured requieres a valid SSL cert by a CA on your web server.';

