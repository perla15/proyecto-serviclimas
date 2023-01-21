$(.btn_new_cliente).click(function(e){
	e.preventeDefault();
	$('#nom_cliente')removeAttr('disabled');
	$('#tel_cliente').removeAttr('disabled');
	$('#dir_cliente').removeAttr('disabled');

	$('#div_registro_cliente').slideDown();
});