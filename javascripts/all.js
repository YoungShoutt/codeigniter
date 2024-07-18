$(function(){
	$("#tabs").tabs({
		fx: { height: 'toggle', opacity: 'toggle'}
	});
	$.ajax({
		url: 'home/read',
		dataType: 'json',
		success: function(response){
			$("#readTemplate").render(response).appendTo("#records");
		}
	});
});