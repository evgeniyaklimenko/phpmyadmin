<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// Atajos para Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
$month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
// Ver http://www.php.net/manual/es/function.strftime.php para definir
// la variable siguiente
$datefmt = '%d-%m-%Y a las %H:%M:%S';
$timespanfmt = '%s d�as, %s horas, %s minutos y %s segundos';

$strAPrimaryKey = 'Se a�adi� una clave primaria en %s';
$strAbortedClients = 'Abortado';
$strAbsolutePathToDocSqlDir = 'Por favor, ingrese la ruta absoluta del servidor hacia el directorio docSQL';
$strAccessDenied = 'Acceso denegado ';
$strAccessDeniedExplanation = 'phpMyAdmin intent� conectarse con el servidor MySQL, y el servidor rechaz� esta conexi�n. Deber� revisar el host, nombre de usuario y contrase�a en config.inc.php y asegurarse que corresponden con la informaci�n dada por el administrador del servidor MySQL.';
$strAction = 'Acci�n';
$strAddAutoIncrement = 'A�ada el valor AUTO_INCREMENT';
$strAddDeleteColumn = 'A�adir/borrar columna de criterio';
$strAddDeleteRow = 'A�adir/borrar fila de criterio';
$strAddDropDatabase = 'A�ada DROP DATABASE';
$strAddIntoComments = 'A�ada en los comentarios';
$strAddNewField = 'Insertar nuevo campo';
$strAddPriv = 'Agregar nuevo privilegio';
$strAddPrivMessage = 'Ud. ha a�adido un nuevo privilegio.';
$strAddPrivilegesOnDb = 'A�ada privilegios en esta base de datos';
$strAddPrivilegesOnTbl = 'A�ada privilegios en esta tabla';
$strAddSearchConditions = 'Insertar las condiciones de b�squeda (cuerpo de la cl�usula "where"):';
$strAddToIndex = 'A�adido al �ndice &nbsp;%s&nbsp;columna(s)';
$strAddUser = 'Agregar nuevo usuario';
$strAddUserMessage = 'Ud. ha agregado un nuevo usuario.';
$strAddedColumnComment = 'Se a�adi� un comentario para la columna';
$strAddedColumnRelation = 'Se a�adi� una relaci�n para la columna';
$strAdministration = 'Administraci�n';
$strAffectedRows = 'Filas afectadas: ';
$strAfter = 'Despu�s de %s';
$strAfterInsertBack = 'Volver';
$strAfterInsertNewInsert = 'Insertar un nuevo registro';
$strAll = 'Todos/as';
$strAllTableSameWidth = '�Mostrar todas las tablas que tienen el mismo ancho?';
$strAlterOrderBy = 'Modificar el "Order By" de la tabla';
$strAnIndex = 'Se a�adi� un �ndice en %s';
$strAnalyzeTable = 'Analizar la tabla';
$strAnd = 'y luego';
$strAny = 'cualquiera';
$strAnyColumn = 'Cualquier columna';
$strAnyDatabase = 'Cualquier base de datos';
$strAnyHost = 'Cualquier servidor';
$strAnyTable = 'Cualquier tabla';
$strAnyUser = 'Cualquier usuario';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'Al comienzo de la tabla';
$strAtEndOfTable = 'Al final de la tabla';
$strAttr = 'Atributos';
$strAutodetect = 'Autodetecte';
$strAutomaticLayout = 'Layout autom�tico';

$strBack = 'Volver';
$strBeginCut = 'INICIO DEL CORTE';
$strBeginRaw = 'INICIO DEL VOLCADO';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - �no editar! ';
$strBookmarkDeleted = 'El "bookmark" ha sido borrado.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta guardada en favoritos';
$strBookmarkThis = 'Guardar esta consulta en favoritos';
$strBookmarkView = 'Solamente ver';
$strBrowse = 'Examinar';
$strBzError = 'Si desea usar las opciones de compresi�n Bz2, deber� actualizar su php a una versi�n m�s reciente. phpMyAdmin no fue capaz de comprimir el dump debido a que est� da�ada la extensi�n Bz2 en esta versi�n de php. Le recomendamos que cambie el par�metro <code>$cfg[\'BZipDump\']</code> en su archivo de configuraci�n phpMyAdmin a <code>FALSE</code>. Lea el reporte de "bugs" de php %s para mayor informaci�n.';
$strBzip = '"Comprimido con bzip"';

$strCSVOptions = 'Opciones CSV';
$strCannotLogin = 'No se consigui� hacer login al servidor MySQL';
$strCantLoad = 'no se pudo cargar la extensi�n %s,<br />por favor revise su configuraci�n de PHP.';
$strCantLoadMySQL = 'imposible cargar la extensi�n MySQL,<br />por favor revise la configuraci�n de PHP.';
$strCantLoadRecodeIconv = 'No se puede cargar iconv o recodificar una extensi�n necesaria para la conversi�n de juegos de caracteres, configure php para permitir el uso de estas extensiones o desactive la conversi�n de juegos de caracteres en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No puede cambiar el nombre del �ndice a �PRIMARY!';
$strCantUseRecodeIconv = 'No se puede utilizar iconv ni libiconv ni la funci�n recode_string mientras se carga la extensi�n de informes. Comprueba la configuraci�n de php.';
$strCardinality = 'Cardinalidad';
$strCarriage = 'Retorno de carro: \\r';
$strChange = 'Cambiar';
$strChangeCopyMode = 'Crear un nuevo usuario con los mismos privilegios y...';
$strChangeCopyModeCopy = '... mantenga el anterior.';
$strChangeCopyModeDeleteAndReload = ' ... borre el viejo de las tablas de usuario y luego recargue los privilegios.';
$strChangeCopyModeJustDelete = ' ... borre el viejo de las tablas de usuario.';
$strChangeCopyModeRevoke = ' ... revocar todos los privilegios activos del viejo y elim�nelos despu�s.';
$strChangeCopyUser = 'Cambie la informaci�n de Login / Copiar Usuario';
$strChangeDisplay = 'Elija el campo a mostrar';
$strChangePassword = 'Cambio de contrase�a';
$strCharset = 'Charset';
$strCharsetOfFile = 'Codificaci�n de los caracteres del archivo:';
$strCheckAll = 'Revisar todos/as';
$strCheckDbPriv = 'Revisar privilegios de la base de datos';
$strCheckPrivs = 'Revise los privilegios';
$strCheckPrivsLong = 'Revise los privilegios para la base de datos &quot;%s&quot;.';
$strCheckTable = 'Revisar tabla';
$strChoosePage = 'Elija la p�gina a editar';
$strColComFeat = 'Mostrando los comentarios de la columna';
$strColumn = 'Columna';
$strColumnNames = 'Nombre de las columnas';
$strColumnPrivileges = 'Privilegios espec�ficos para la columna';
$strCommand = 'Comando';
$strComments = 'Comentarios';
$strCompleteInserts = 'Completar los "Inserts"';
$strCompression = 'Compresi�n';
$strConfigFileError = '�phpMyAdmin no puede leer el fichero de configuraci�n!<br />Esto puede suceder si php encuentra un error sint�ctico en �l o bien php no puede encontrar el fichero.<br />Intente acceder al fichero de configuraci�n directamente mediante el siguiente enlace y compruebe el(los) mensaje(s) de error que reciba. En muchas ocasiones falta una coma o punto y coma en alg�n sitio.<br />Si recibe una p�gina en blanco, todo est� correcto.';
$strConfigureTableCoord = 'Configure las coordenadas para la tabla %s';
$strConfirm = '�Realmente quiere hacerlo?';
$strConnections = 'Conexiones';
$strCookiesRequired = 'Las "cookies" deben estar habilitadas pasado este punto.';
$strCopyTable = 'Copiar la tabla a (base de datos<b>.</b>tabla):';
$strCopyTableOK = 'La tabla %s se copi� a %s.';
$strCopyTableSameNames = '�No es posible copiar la tabla a la misma!';
$strCouldNotKill = 'phpMyAdmin no fue capaz de destruir el thread %s. Probablemente ya ha sido cerrado.';
$strCreate = 'Crear';
$strCreateIndex = 'Crear un �ndice en&nbsp;%s&nbsp;columnas';
$strCreateIndexTopic = 'Crear un nuevo �ndice';
$strCreateNewDatabase = 'Crear nueva base de datos';
$strCreateNewTable = 'Crear nueva tabla en la base de datos %s';
$strCreatePage = 'Crear una nueva p�gina';
$strCreatePdfFeat = 'Creaci�n de los PDF';
$strCriteria = 'Criterio';

$strDBComment = 'Comentario de la base de datos: ';
$strDBGContext = 'Contexto';
$strDBGContextID = 'ID del contexto';
$strDBGHits = 'Hits';
$strDBGLine = 'L�nea';
$strDBGMaxTimeMs = 'Tiempo m�ximo, ms';
$strDBGMinTimeMs = 'Tiempo m�nimo, ms';
$strDBGModule = 'M�dulo';
$strDBGTimePerHitMs = 'Tiempo/Hit, ms';
$strDBGTotalTimeMs = 'Tiempo total, ms';
$strData = 'Datos';
$strDataDict = 'Diccionario Datos';
$strDataOnly = 'Solamente datos';
$strDatabase = 'Base de datos ';
$strDatabaseExportOptions = 'Opciones de exportaci�n de la base de datos';
$strDatabaseHasBeenDropped = 'La base de datos %s ha sido eliminada.';
$strDatabaseNoTable = '�Esta base de datos no contiene tablas!';
$strDatabaseWildcard = 'Bases de datos (se permiten comodines):';
$strDatabases = 'Bases de datos';
$strDatabasesDropped = '%s bases de datos han sido eliminadas exitosamente.';
$strDatabasesStats = 'Estad�sticas de la base';
$strDatabasesStatsDisable = 'Desactive las estad�sticas';
$strDatabasesStatsEnable = 'Active las estad�sticas';
$strDatabasesStatsHeavyTraffic = 'Nota: Activando las estad�sticas de la base de datos aqu� podr�an causar tr�fico pesado entre el servidor web y el servidor MySQL.';
$strDbPrivileges = 'Privilegios espec�ficos para la base de datos';
$strDbSpecific = 'espec�fico para la base de datos';
$strDefault = 'Predeterminado';
$strDefaultValueHelp = 'Para valores predeterminados, por favor ingrese solamente un valor, sin "backslash escaping" ni comillas, usando este formato: a';
$strDelOld = 'La p�gina actual tiene referencias a tablas que ya no existen.  �Desea eliminar esas referencias?';
$strDelete = 'Borrar';
$strDeleteAndFlush = 'Borre a los usuarios y vuelva a cargar los privilegios posteriormente.';
$strDeleteAndFlushDescr = 'Este es el modo m�s limpio, pero volver a cargar los privilegios puede tomar un tiempo.';
$strDeleteFailed = '�La operaci�n de borrado fall�!';
$strDeleteUserMessage = 'Ud. ha borrado el usuario %s.';
$strDeleted = 'La fila se ha borrado';
$strDeletedRows = 'Filas borradas: ';
$strDeleting = 'Borrando %s';
$strDescending = 'Descendente';
$strDisabled = 'Deshabilitado';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar las opciones';  //Features = �opciones, componentes?
$strDisplayOrder = 'Mostrar en este orden:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Hacer una consulta (comod�n: "%")';
$strDoYouReally = 'Realmente desea ';
$strDocu = 'Documentaci�n';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar la base de datos %s';
$strDropSelectedDatabases = 'Elimine la base de datos seleccionada';
$strDropTable = 'Borrar la tabla';
$strDropUsersDb = 'Eliminar las bases de datos que tienen los mismos nombres de los usuarios.';
$strDumpComments = 'Incluya los comentarios de la columna como comentarios-SQL integrados';
$strDumpSaved = 'Su archivo (dump) ha sido guardado con el nombre %s.';
$strDumpXRows = 'Volcar %s filas empezando por la fila %s.';
$strDumpingData = 'Volcar la base de datos para la tabla';
$strDynamic = 'din�mico/a';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar las p�ginas PDF';
$strEditPrivileges = 'Editar los privilegios';
$strEffective = 'Efectivo/a';
$strEmpty = 'Vaciar';
$strEmptyResultSet = 'MySQL ha devuelto un valor vac�o (i.e. cero columnas).';
$strEnabled = 'Habilitado';
$strEnd = 'Fin';
$strEndCut = 'FIN DEL CORTE';
$strEndRaw = 'FIN DEL VOLCADO';
$strEnglishPrivileges = ' Nota: Los nombres de los privilegios de MySQL est�n expresados en ingl�s ';
$strError = 'Error';
$strExcelOptions = 'Opciones de Excel';
$strExecuteBookmarked = 'Ejecute la consulta marcada previamente';
$strExplain = 'Explicar el SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a formato XML';
$strExtendedInserts = '"Inserts" extendidos';
$strExtra = 'Extra';

$strFailedAttempts = 'Intentos fallidos';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Se elimin� el campo %s';
$strFields = 'Campos';
$strFieldsEmpty = 'El n�mero de campos est� �vac�o!';
$strFieldsEnclosedBy = 'Campos encerrados por';
$strFieldsEscapedBy = 'Campos escapados por';
$strFieldsTerminatedBy = 'Campos terminados en';
$strFileAlreadyExists = 'El archivo %s ya existe en el servidor, cambie el nombre del archivo o revise la opci�n de sobreescritura.';
$strFileCouldNotBeRead = 'No fue posible leer el archivo';
$strFileNameTemplate = 'Plantilla del nombre del archivo';
$strFileNameTemplateHelp = 'Use __DB__ para nombre de la base de datos, __TABLE__ para el nombre de la tabla y las opciones %sany strftime%s para especificaciones de tiempo; la extensi�n se a�adir� autom�ticamente. Cualquier otro texto ser� conservado.';
$strFileNameTemplateRemember = 'recuerde la plantilla';
$strFixed = 'fijo';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obtiene los privilegios users\' directamente de las tablas de privilegios MySQL\'. El contenido de estas tablas puede diferir de los privilegios que usa el servidor si es que se han realizado cambios manuales en �l. En este caso, deber� %sreload los privilegios%s antes de continuar.';
$strFlushTable = 'Vaciar el cach� de la tabla ("FLUSH")';
$strFormEmpty = '�Falta un valor en el formulario!';
$strFormat = 'Formato';
$strFullText = 'Textos completos';
$strFunction = 'Funci�n';

$strGenBy = 'Generado por';
$strGenTime = 'Tiempo de generaci�n';
$strGeneralRelationFeat = 'Opciones de relaci�n general';  //Features = �opciones, componentes?
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilegios globales';
$strGlobalValue = 'Valor global';
$strGo = 'Contin�e';
$strGrantOption = 'Conceder';
$strGrants = 'Permisos';
$strGzip = '"Comprimido con gzip"';

$strHasBeenAltered = 'fue modificada.';
$strHasBeenCreated = 'se cre�.';
$strHaveToShow = 'Debe elegir al menos una columna para mostrar';
$strHome = 'P�gina de inicio';
$strHomepageOfficial = 'P�gina oficial de phpMyAdmin';
$strHomepageSourceforge = 'Descargar phpMyAdmin de Sourceforge';
$strHost = 'Servidor';
$strHostEmpty = '��El nombre del servidor est� vac�o!!';

$strId = 'Identificaci�n';
$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Si desea cargar solamente una de las columnas de la tabla, especif�quelo, separando los campos con una coma.';
$strIgnore = 'Ignorar';
$strIgnoringFile = 'Ignorando el archivo %s';
$strImportDocSQL = 'Importar archivos docSQL';
$strImportFiles = 'Importar archivos';
$strImportFinished = 'Importaci�n culminada';
$strInUse = 'en uso';
$strIndex = '�ndice';
$strIndexHasBeenDropped = 'El �ndice %s ha sido eliminado';
$strIndexName = 'Nombre del �ndice&nbsp;:';
$strIndexType = 'Tipo de �ndice&nbsp;:';
$strIndexes = '�ndices';
$strInnodbStat = 'Estado del InnoDB';
$strInsecureMySQL = 'Su archivo de configuraci�n contiene par�metros (root sin contrase�a) que corresponden a la cuenta privilegiada predeterminada de MySQL. Su servidor de MySQL est� usando estos valores, que constituyen una vulnerabilidad.  Se le recomienda corregir esta brecha de seguridad.';
$strInsert = 'Insertar';
$strInsertAsNewRow = 'Insertar como una nueva fila';
$strInsertNewRow = 'Insertar nueva fila';
$strInsertTextfiles = 'Insertar archivo de texto en la tabla';
$strInsertedRowId = 'Se insert� la id de la fila:';
$strInsertedRows = 'Filas insertadas:';
$strInstructions = 'Instrucciones';
$strInvalidName = '"%s" es una palabra reservada, no puede usarla como nombre de /Base de datos/tabla/campo.';

$strJumpToDB = 'Salte a la base de datos &quot;%s&quot;.';
$strJustDelete = 'Solamente borre a los usuarios de la tabla de privilegios.';
$strJustDeleteDescr = 'Los usuarios &quot;borrados&quot; a�n podr�n acceder al servidor de manera usual hasta que los privilegios se hayan vuelto a cargar.';

$strKeepPass = 'No cambiar la contrase�a';
$strKeyname = 'Nombre de la clave';
$strKill = 'Matar el proceso';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'opciones LaTeX';
$strLandscape = 'Orientaci�n horizontal';
$strLength = 'Longitud';
$strLengthSet = 'Longitud/Valores*';
$strLimitNumRows = 'registros por p�gina';
$strLineFeed = 'Retorno de carro: \\n';
$strLines = 'L�neas';
$strLinesTerminatedBy = 'L�neas terminadas en';
$strLinkNotFound = 'Enlace no encontrado';
$strLinksTo = 'Enlaces a';
$strLoadExplanation = 'El mejor m�todo es revisado en forma predeterminada, pero puede cambiarla si fracasa.';
$strLoadMethod = 'CARGAR m�todo';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localizaci�n del archivo de texto';
$strLogPassword = 'Contrase�a:';
$strLogUsername = 'Usuario:';
$strLogin = 'Identificaci�n';
$strLoginInformation = 'Informaci�n acerca del login';
$strLogout = 'Salir';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'MIME-types disponibles';
$strMIME_available_transform = 'Transformaciones disponibles';
$strMIME_description = 'Descripci�n';
$strMIME_file = 'Nombre del archivo';
$strMIME_nodescription = 'No hay una descripci�n disponible para esta transformaci�n.<br />Por favor pregunte al autor lo que %s hace.';
$strMIME_transformation = 'Transformaci�n del navegador';
$strMIME_transformation_note = 'Para una lista de opciones de transformaci�n disponibles y sus transformaciones MIME-type transformations, d� clic en %stransformation descriptions%s';
$strMIME_transformation_options = 'Opciones de transformaci�n';
$strMIME_transformation_options_note = 'Por favor ingrese los valores para las opciones de transformaci�n usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez requiere insertar un Backslash ("\") o comilla sencilla ("\'") entre esos valores, use backslash (por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strMIME_without = 'MIME-types impresos en it�licas no tienen una funci�n de transformaci�n adicional';
$strMissingBracket = 'Falta una llave (\{ o \})';
$strModifications = 'Se han guardado las modificaciones';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modificar un �ndice';
$strMoreStatusVars = 'M�s variables del estado actual';
$strMoveTable = 'Mover tabla a (Base de datos<b>.</b>tabla):';
$strMoveTableOK = 'La tabla %s ha sido movida a %s.';
$strMoveTableSameNames = '�No es posible mover la tabla a la misma!';
$strMustSelectFile = 'Debe seleccionar el archivo que desea insertar.';
$strMySQLCharset = 'Juegos de caracteres de MySQL';
$strMySQLReloaded = 'Reinicio de MySQL.';
$strMySQLSaid = 'MySQL ha dicho: ';
$strMySQLServerProcess = 'MySQL %pma_s1% ejecut�ndose en %pma_s2% como %pma_s3%';
$strMySQLShowProcess = 'Mostrar procesos';
$strMySQLShowStatus = 'Mostrar informaci�n de marcha de MySQL';
$strMySQLShowVars = 'Mostrar las variables del sistema MySQL';

$strName = 'Nombre';
$strNext = 'Pr�xima';
$strNo = 'No';
$strNoDatabases = 'No hay bases de datos';
$strNoDatabasesSelected = 'No se seleccionaron bases de datos.';
$strNoDescription = 'Sin descripci�n';
$strNoDropDatabases = '"DROP DATABASE" los enunciados ("sentences") est�n deshabilitados.';
$strNoExplain = 'Saltarse la explicaci�n del SQL';
$strNoFrames = 'phpMyAdmin funciona mejor con un navegador que <b>soporte marcos (frames)</b>.';
$strNoIndex = '�No se ha definido el �ndice!';
$strNoIndexPartsDefined = '�No se han definido las partes del �ndice!';
$strNoModification = 'Sin cambios';
$strNoOptions = 'Este formato no tiene opciones';
$strNoPassword = 'Sin contrase�a';
$strNoPermission = 'El servidor web no tiene permiso para guardar el archivo %s.';
$strNoPhp = 'Sin c�digo PHP';
$strNoPrivileges = 'Sin privilegios';
$strNoQuery = '�No existe la consulta SQL!';
$strNoRights = '�Usted no tiene suficientes privilegios para estar aqu� ahora!';
$strNoSpace = 'No hay suficiente espacio para guardar el archivo %s.';
$strNoTablesFound = 'No se han encontrado tablas en la base de datos.';
$strNoUsersFound = 'Usuario(s) no encontrado(s).';
$strNoUsersSelected = 'No se seleccionaron usuarios.';
$strNoValidateSQL = 'Saltarse la validaci�n del SQL';
$strNone = 'Ninguna';
$strNotNumber = '��sto no es un n�mero!';
$strNotOK = 'no recibi� el OK';
$strNotSet = 'La tabla <b>%s</b> no fue hallada o no fue definida en %s';
$strNotValidNumber = '�no es un n�mero de fila v�lido!';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s resultado(s) en la tabla <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)';
$strNumTables = 'Tablas';

$strOK = 'OK';
$strOftenQuotation = 'A menudo son comillas. OPCIONALMENTE significa que �nicamente los campos char y varchar est�n encerrados por el caracter "comillas".';
$strOperations = 'Operaciones';
$strOptimizeTable = 'Optimizar la tabla';
$strOptionalControls = 'Es opcional. Controla el modo de escribir o leer caracteres especiales.';
$strOptionally = 'OPCIONALMENTE';
$strOptions = 'Opciones';
$strOr = 'O';
$strOverhead = 'Residuo a depurar';
$strOverwriteExisting = 'Sobreescribir el(los) archivo(s) existente(s)';

$strPHP40203 = 'Usted est� usando PHP 4.2.3, el cual tiene un error de codificaci�n en cuanto a los "strings multi-byte" (mbstring). Lea el reporte 19404 de PHP. Esta versi�n de PHP no est� recomendada para ser usada con phpMyAdmin.';
$strPHPVersion = 'Versi�n de PHP';
$strPageNumber = 'N�mero de p�gina:';
$strPaperSize = 'Tama�o del papel';
$strPartialText = 'Textos parciales';
$strPassword = 'Contrase�a';
$strPasswordChanged = 'La contrase�a para %s fue cambiada exitosamente.';
$strPasswordEmpty = '�La contrase�a est� vac�a!';
$strPasswordNotSame = '�Las contrase�as no coinciden!';
$strPdfDbSchema = 'Esquema de la base de datos "%s" - P�gina %s';
$strPdfInvalidPageNum = '�No se ha definido el n�mero de p�gina PDF!';
$strPdfInvalidTblName = '�La tabla "%s" no existe!';
$strPdfNoTables = 'No existen tablas';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPhp = 'Crear c�digo PHP';
$strPmaDocumentation = 'Documentaci�n de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> �DEBE constar en el fichero de configuraci�n!';
$strPortrait = 'Orientaci�n vertical';
$strPos1 = 'Empezar';
$strPrevious = 'Previo';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Clave Primaria';
$strPrimaryKeyHasBeenDropped = 'La clave primaria ha sido eliminada';
$strPrimaryKeyName = 'El nombre de la clave primaria debe ser... �PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>debe</b> ser el nombre de y <b>�nicamente de</b> �una clave primaria!)';
$strPrint = 'Imprimir';
$strPrintView = 'Vista de impresi�n';
$strPrivDescAllPrivileges = 'Incluye todos los privilegios excepto CONCEDER (GRANT).';
$strPrivDescAlter = 'Permite alterar la estructura de las tablas existentes.';
$strPrivDescCreateDb = 'Permite crear nuevas bases de datos y tablas.';
$strPrivDescCreateTbl = 'Permite la creaci�n de tablas nuevas.';
$strPrivDescCreateTmpTable = 'Permite la creaci�n de tablas temporales.';
$strPrivDescDelete = 'Permite borrar datos.';
$strPrivDescDropDb = 'Permite eliminar bases de datos y tablas.';
$strPrivDescDropTbl = 'Permite eliminar tablas.';
$strPrivDescExecute = 'Permite correr procedimientos guardados; no tiene efecto en esta versi�n de MySQL.';
$strPrivDescFile = 'Permite importar y exportar datos de y hacia archivos.';
$strPrivDescGrant = 'Permite a�adir usuarios y privilegios sin conectarse nuevamente a la tabla de privilegios.';
$strPrivDescIndex = 'Permite crear y eliminar �ndices.';
$strPrivDescInsert = 'Permite insertar y reemplazar datos.';
$strPrivDescLockTables = 'Permite poner candados a las tablas para el "thread" actual.';
$strPrivDescMaxConnections = 'Limita el n�mero de conexiones nuevas que el usuario puede abrir por hora.';
$strPrivDescMaxQuestions = 'Limita el n�mero de consultas que el usuario puede enviar al servidor por hora.';
$strPrivDescMaxUpdates = 'Limita el n�mero de comandos que cambian cualquier tabla o base de datos que el usuario puede ejecutar por hora.';
$strPrivDescProcess3 = 'Permite destruir los procesos de otros usuarios.';
$strPrivDescProcess4 = 'Permite ver las consultas completas en la lista de procesos.';
$strPrivDescReferences = 'No tiene efecto en esta versi�n de MySQL.';
$strPrivDescReload = 'Permite volver a cargar los par�metros del servidor y depurar los cach�s del servidor.';
$strPrivDescReplClient = 'Da el derecho al usuario para preguntar d�nde est�n los "slaves / masters".';
$strPrivDescReplSlave = 'Necesario para los "slaves" de replicaci�n.';
$strPrivDescSelect = 'Permite leer los datos.';
$strPrivDescShowDb = 'Concede acceso a la lista completa de bases de datos.';
$strPrivDescShutdown = 'Permite desconectar el servidor.';
$strPrivDescSuper = 'Permite la conexi�n, incluso si el n�mero m�ximo de conexiones ha sido alcanzado; Necesario para la mayor parte de operaciones administrativas tales como montar par�metros de variables globales o matar "threads" de otros usuarios.';
$strPrivDescUpdate = 'Permite cambiar los datos.';
$strPrivDescUsage = 'Sin privilegios.';
$strPrivileges = 'Privilegios';
$strPrivilegesReloaded = 'Los privilegios fueron cargados nuevamente de manera exitosa.';
$strProcesslist = 'Lista de procesos';
$strProperties = 'Propiedades';
$strPutColNames = 'Ponga los nombres de campo en la primera hilera';

$strQBE = 'Generar una consulta';
$strQBEDel = 'Borrar';
$strQBEIns = 'Insertar';
$strQueryFrame = 'Ventana de consulta';
$strQueryFrameDebug = 'Informaci�n para hacer la depuraci�n (Debugging)';
$strQueryFrameDebugBox = 'Variables activas para el formulario de consulta:\nDB: %s\nTabla: %s\nServidor: %s\n\nVariables actuales para el formulario de consulta:\nDB: %s\nTabla: %s\nServidor: %s\n\nLocalizaci�n del punto de apertura: %s\nLocalizaci�n del Frameset: %s.';
$strQueryOnDb = 'Consulta a la base de datos <b>%s</b>:';
$strQuerySQLHistory = 'Historial-SQL';
$strQueryStatistics = '<b>Estad�sticas de consulta</b>: Desde su inicio, %s consultas han sido enviadas al servidor.';
$strQueryTime = 'La consulta tard� %01.4f seg';
$strQueryType = 'Tipo de consulta';
$strQueryWindowLock = 'No sobreescriba esta consulta desde fuera de la ventana';

$strReType = 'Re-escriba';
$strReceived = 'Recibido';
$strRecords = 'Registros';
$strReferentialIntegrity = 'Compruebe la integridad referencial:';
$strRelationNotWorking = 'Las opciones adicionales para trabajar con tablas vinculadas fueron desactivadas. Para saber porqu�, d� clic %saqu�%s.';  //Features = �opciones, componentes?
$strRelationView = 'Vista de relaciones';
$strRelationalSchema = 'Esquema relacionado';
$strRelations = 'Relaciones';
$strReloadFailed = 'El reinicio de MySQL ha fallado.';
$strReloadMySQL = 'Reinicio de MySQL';
$strReloadingThePrivileges = 'Cargando los privilegios nuevamente';
$strRememberReload = 'Recuerde reiniciar el servidor.';
$strRemoveSelectedUsers = 'Retire a los usuarios seleccionados';
$strRenameTable = 'Cambiar el nombre de la tabla a';
$strRenameTableOK = 'Tabla %s ahora se llama %s';
$strRepairTable = 'Reparar la tabla';
$strReplace = 'Reemplazar';
$strReplaceNULLBy = 'Reemplace NULL con';
$strReplaceTable = 'Reemplazar los datos de la tabla con archivo';
$strReset = 'Reset';
$strResourceLimits = 'L�mites de recursos';
$strRevoke = 'Revocar';
$strRevokeAndDelete = 'Revocar todos los privilegios activos de los usuarios y b�rrelos despu�s.';
$strRevokeAndDeleteDescr = 'Los usuarios a�n tendr�n el privilegio "USAGE" hasta que los privilegios se hayan vuelto a cargar.';
$strRevokeGrant = 'Revocar la concesi�n de privilegios';
$strRevokeGrantMessage = 'Ud. ha revocado la concesi�n de privilegios para %s';
$strRevokeMessage = 'Ud. ha revocado los privilegios para %s';
$strRevokePriv = 'Revocar los privilegios';
$strRowLength = 'Longitud de la fila';
$strRowSize = ' Tama�o de la fila ';
$strRows = 'Filas';
$strRowsFrom = 'filas empezando de';
$strRowsModeFlippedHorizontal = 'horizontal (encabezados rotados)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s y repite encabezados cada %s celdas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estad�sticas de la fila';
$strRunQuery = 'Ejecutar la consulta';
$strRunSQLQuery = 'Ejecute la/s consulta/s SQL en la base de datos %s';
$strRunning = 'ejecut�ndose en %s';

$strSQL = 'SQL';
$strSQLOptions = 'Opciones SQL';
$strSQLParserBugMessage = 'Hay la posibilidad de que usted haya encontrado un error en el int�rprete de SQL. Por favor examine cuidadosamente su consulta, y verifique que las comillas son usadas adecuadamente y hacen juego. Otra posible causa del fallo es que usted este subiendo un archivo con datos binarios por fuera del �rea de texto delimitado. Intente su consulta en la interfaz de comandos de MySQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema. Si a�n tiene problemas o el int�rprete falla en tanto que en la interfaz de comandos funciona, por favor reduzca la salida de su consulta de SQL a la consulta que genera el problema, y env�e un reporte de error con la cadena de datos en la secci�n de CORTE indicada abajo:';
$strSQLParserUserError = 'Parece haber un error en su consulta de SQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema.';
$strSQLQuery = 'consulta SQL';
$strSQLResult = 'Resultado SQL';
$strSQPBugInvalidIdentifer = 'El identificador no es v�lido';
$strSQPBugUnclosedQuote = 'Comillas sin cerrar';
$strSQPBugUnknownPunctuation = 'Signo de puntuaci�n desconocido';
$strSave = 'Grabar';
$strSaveOnServer = 'Guardar en el servidor, en el directorio %s ';
$strScaleFactorSmall = 'El factor de la escala es demasiado peque�o para poner el esquema en una p�gina';
$strSearch = 'Buscar';
$strSearchFormTitle = 'Buscar en la base de datos';
$strSearchInTables = 'En la(s) tabla(s):';
$strSearchNeedle = 'Palabra(s) o valor(es) a buscar (comod�n: "%"):';
$strSearchOption1 = 'al menos una de estas palabras';
$strSearchOption2 = 'Todas las palabras';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'como expresi�n regular';
$strSearchResultsFor = 'Resultados de la b�squeda por "<i>%s</i>" %s:';
$strSearchType = 'Encontrado:';
$strSecretRequired = 'El archivo de configuraci�n ahora necesita salvoconducto (una frase secreta) (blowfish_secret).';
$strSelect = 'Seleccionar';
$strSelectADb = 'Seleccione una base de datos';
$strSelectAll = 'Seleccione todo';
$strSelectFields = 'Seleccionar campos (al menos uno):';
$strSelectNumRows = 'en la consulta';
$strSelectTables = 'Seleccionar tablas';
$strSend = 'Enviar';
$strSent = 'Enviado';
$strServer = 'Servidor %s';
$strServerChoice = 'Elecci�n del servidor';
$strServerStatus = 'Informaci�n acerca del tiempo de marcha';
$strServerStatusUptime = 'Este servidor MySQL ha estado corriendo durante %s. Se inici� en %s.';
$strServerTabProcesslist = 'Procesos';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Tr�fico del servidor</b>: Estas tablas las estad�sticas de tr�fico en la red de este servidor MySQL desde su inicio.';
$strServerVars = 'Variables y par�metros del servidor';
$strServerVersion = 'Versi�n del servidor';
$strSessionValue = 'Valor de la sesi�n';
$strSetEnumVal = 'Si el tipo de campo es "enum" o "set", por favor ingrese los valores usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez necesita poner una barra invertida("\") o una comilla simple ("\'") entre esos valores, siempre ponga una barra invertida. (Por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Mostrar todo';
$strShowColor = 'Mostrar color';
$strShowCols = 'Mostrar columnas';
$strShowDatadictAs = 'Formato del Diccionario de Datos';
$strShowFullQueries = 'Muestre las consultas enteras';
$strShowGrid = 'Mostrar cuadr�cula';
$strShowPHPInfo = 'Mostrar informaci�n de PHP';
$strShowTableDimension = 'Mostrar la dimensi�n de las tablas';
$strShowTables = 'Mostrar las tablas';
$strShowThisQuery = ' Mostrar esta consulta otra vez ';
$strShowingRecords = 'Mostrando registros ';
$strSingly = '(solo)';
$strSize = 'Tama�o';
$strSort = 'Ordenar';
$strSpaceUsage = 'Espacio utilizado';
$strSplitWordsWithSpace = 'Palabras separadas por un espacio (" ").';
$strStatCheckTime = '�ltima revisi�n';
$strStatCreateTime = 'Creaci�n';
$strStatUpdateTime = '�ltima actualizaci�n';
$strStatement = 'Enunciado';
$strStatus = 'Estado actual';
$strStrucCSV = 'Datos CSV ';
$strStrucData = 'Estructura y datos';
$strStrucDrop = 'A�adir \'drop table\'';
$strStrucExcelCSV = 'CSV para datos de MS Excel';
$strStrucOnly = '�nicamente la estructura ';
$strStructPropose = 'Planteamiento de una estructura de tabla';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'Su consulta ha sido ejecutada con �xito';
$strSum = 'N�mero de filas';
$strSwitchToTable = 'Cambie (switch) a la tabla copiada';

$strTable = 'Tabla';
$strTableComments = 'Comentarios de la tabla';
$strTableEmpty = '�El nombre de la tabla est� vac�o!';
$strTableHasBeenDropped = 'Se ha eliminado la tabla %s';
$strTableHasBeenEmptied = 'Se ha vaciado la tabla %s';
$strTableHasBeenFlushed = 'Se ha vaciado el cach� de la tabla %s';
$strTableMaintenance = 'Mantenimiento de la tabla';
$strTableOfContents = 'Tabla de contenidos';
$strTableOptions = 'Opciones de la tabla';
$strTableStructure = 'Estructura de tabla para la tabla';
$strTableType = 'Tipo de tabla';
$strTables = '%s tabla(s)';
$strTblPrivileges = 'Privilegios espec�ficos para la tabla';
$strTextAreaLength = ' Debido a su longitud,<br /> este campo puede no ser editable ';
$strTheContent = 'Se insert� el contenido de su archivo.';
$strTheContents = 'El contenido del archivo reemplaza el contenido de la tabla seleccionada para las columnas id�nticas primarias o �nicas.';
$strTheTerminator = 'El terminador de los campos.';
$strThisHost = 'Este Host';
$strThisNotDirectory = 'Esto no fue un directorio';
$strThreadSuccessfullyKilled = 'El thread %s fue destruido exitosamente.';
$strTime = 'Tiempo';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraffic = 'Tr�fico';
$strTransformation_image_jpeg__inline = 'Muestra un thumbnail que puede abrirse mediante un clic; opciones: width,height en p�xeles (mantiene la proporci�n original)';
$strTransformation_image_jpeg__link = 'Muestra un enlace a esta imagen (blob download directo, i.e.).';
$strTransformation_image_png__inline = 'Ver imagen/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Toma un campo TIME, TIMESTAMP o DATETIME y lo formatea usando su formato de fechas local. La primera opci�n es el offset (en horas) que se a�adir� al timestamp (Predeterminado: 0). La segunda opci�n es un dateformat diferente de acuerdo con los par�metros disponibles para el strftime() del PHP.';
$strTransformation_text_plain__external = 'LINUX SOLAMENTE: Ejecuta una aplicaci�n externa y alimenta el fielddata mediante input est�ndar. Retorna el output est�ndar de la aplicaci�n. El predeterminado es Tidy, para mostrar c�digo HTML agradable para la impresi�n. Por razones de seguridad, debe editar manualmente el archivo libraries/transformations/text_plain__external.inc.php e insertar las herramientas que permitir� se ejecuten. La primera opci�n ser� el n�mero del programa que querr� utilizar y la segunda opci�n son los par�metros para el programa. El tercer par�metro, de ser 1 convertir� el output usando htmlspecialchars() (el predeterminado es 1). Un cuarto par�metro, de ser 1 pondr� un NOWRAP a la celda de contenido para que todo el output se muestre sin reformatear (Predeterminado 1)';
$strTransformation_text_plain__formatted = 'Mantiene el formato original del campo. No se puede hacer Escape.';
$strTransformation_text_plain__imagelink = 'Muestra una imagen y un enlace, el campo contiene el nombre del archivo; la primera opci�n es un prefijo como "http://dominio.com/", la segunda opci�n es el ancho en p�xeles, el tercero es el alto.';
$strTransformation_text_plain__link = 'Muestra un enlace, el campo contiene el nombre del archivo; la primera opci�n es un prefijo como "http://dominio.com/", la segunda opci�n es un t�tulo para el enlace.';
$strTransformation_text_plain__substr = 'Solamente muestra una parte del string. La primera opci�n es un offset para definir en d�nde empieza el output de su texto (Predeterminado 0). La segunda opci�n es un offset para definir cu�nto texto es retornado. Si est� vac�o, regresa todo el texto restante. La tercera opci�n define cu�les chars se adjuntar�n al output cuando se regrese un substring (Predeterminado: ...) .';
$strTransformation_text_plain__unformatted = 'Muestra el c�digo HTML como entidades HTML. No se muestra formato HTML.';
$strTruncateQueries = 'Trunque las consultas que ya se han mostrado';
$strType = 'Tipo';

$strUncheckAll = 'Desmarcar todos';
$strUnique = '�nico';
$strUnselectAll = 'Deseleccione todo';
$strUpdComTab = 'Para actualizar su tabla Columna_comentarios (Column_comments), por favor revise la documentaci�n';
$strUpdatePrivMessage = 'Ud. ha actualizado los privilegios para %s.';
$strUpdateProfile = 'Actualiza el perfil:';
$strUpdateProfileMessage = 'Se ha actualizado el perfil.';
$strUpdateQuery = 'Modificar la consulta';
$strUsage = 'Uso';
$strUseBackquotes = 'Usar "backquotes" con tablas y nombres de campo';
$strUseHostTable = 'Use la tabla Anfitri�n (Host)';
$strUseTables = 'Usar tablas';
$strUseTextField = 'Use el campo de texto';
$strUser = 'Usuario';
$strUserAlreadyExists = '�El usuario %s ya existe!';
$strUserEmpty = '�El nombre de usuario est� vac�o!';
$strUserName = 'Nombre de usuario';
$strUserNotFound = 'El usuario que seleccion� no fue hallado en la tabla de privilegios.';
$strUserOverview = 'Vista global del usuario';
$strUsers = 'Usuarios';
$strUsersDeleted = 'Los usuarios seleccionados fueron borrados exitosamente.';
$strUsersHavingAccessToDb = 'Usuarios con acceso a &quot;%s&quot;';

$strValidateSQL = 'Validar el SQL';
$strValidatorError = 'El validador de SQL no pudo inicializarse. Por favor revise si ha instalado las extensiones php necesarias, como fueron descritas en la %sdocumentaci�n%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strViewDump = 'Mostrar el volcado esquema de la tabla';
$strViewDumpDB = 'Ver el volcado esquema de la base de datos';
$strViewDumpDatabases = 'Ver el dump (schema) de la base de datos';

$strWebServerUploadDirectory = 'directorio en el servidor web para subir los archivos';
$strWebServerUploadDirectoryError = 'No est� disponible el directorio que usted habilit� para subir las tareas';
$strWelcome = 'Bienvenido a %s';
$strWildcard = 'comod�n';
$strWithChecked = 'Con marca:';
$strWritingCommentNotPossible = 'No fue posible escribir el comentario';
$strWritingRelationNotPossible = 'No fue posible escribir la relaci�n';
$strWrongUser = 'Usuario/contrase�a equivocado. Acceso denegado.';

$strXML = 'XML';

$strYes = 'S�';

$strZeroRemovesTheLimit = 'Nota: si cambia los par�metros de estas opciones a 0 (cero), remueve el l�mite.';
$strZip = '"comprimido con zip"';
// To translate

$strCharsets = 'Charsets';  //to translate
$strDescription = 'Description';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCollation = 'Collation';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strGerman = 'German';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strDictionary = 'dictionary';  //to translate
$strSwedish = 'Swedish';  //to translate
$strDanish = 'Danish';  //to translate
$strCzech = 'Czech';  //to translate
$strTurkish = 'Turkish';  //to translate
$strEnglish = 'English';  //to translate
$strHungarian = 'Hungarian';  //to translate
$strCroatian = 'Croatian';  //to translate
$strBulgarian = 'Bulgarian';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strEstonian = 'Estonian';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strUkrainian = 'Ukrainian';  //to translate
?>
