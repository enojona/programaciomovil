/*********************************************************************
	Jquery Mobile: Framework y CSS deben estar cargados
	'document' --> Representa el documento HTML
	'mobileinit' --> Evento cuando JQuery Mobile ya esta cargado
*********************************************************************/
$(document).bind("mobileinit", function() {
	
	/*********************************************************************
		$.mobile --> Representa al framework JQuery Mobile
	*********************************************************************/
	$.mobile.ajaxEnabled = false;
	$.mobile.defaultPageTransition = "slideup";
	$.mobile.defaultDialogTransition = "flip";
	$.mobile.loadingMessage = "Por favor espere...";
	$.mobile.pageLoadErrorMessage = "No se ha podido cargar";

	alert("Carga Completa");


	/*********************************************************************
		Eventos de Gestos
	*********************************************************************/

	$("zona").bind("tap", function() {

	});

	$("zona").bind("taphold", function() {

	});

	$("zona").bind("swipeleft", function() {

	});

	$("zona").bind("swiperight", function() {

	});

	/*********************************************************************
		Eventos de Mouse Virtuales
	*********************************************************************/

	$(document).on("vclick", "p", function() {
		$(this).append( "<span style='color:red;'> <strong>vclick</strong> fired... </span>" );
	});


});