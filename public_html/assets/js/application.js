$( document ).ready(function() {
	//Hide table options
	$('.options').hide();
	$( "tr" ).hover(
	function() {
		$(this).find('.options').show();
	}, function() {
		$(this).find('.options').hide();
	});
	
	//Tooltip
	$("a").tooltip({
		'placement': 'top'
	});

	//Delete Button
	$(".delete_btn").click(function() { 
		var name = $(this).attr('name');
		var redirect = $(this).attr('redirect');
		if (confirm("Are you sure you want to delete "+name+"?")==true) { 
		 	window.location.href = redirect;
		}
		return false;
	});
});