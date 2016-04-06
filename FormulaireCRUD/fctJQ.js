$(document).ready(function()
{
	$(".dropdown-menu a").click(function ()
	{
		$("#tm").html($(this).html());
		$("#tm").css('color','green');
		$("#themes").val($("#tm").html());
		/*$("#themes").css('visibility','visible');*/
	});

	$(".checkbox").click(function()
	{
		if( $('input[class=checkbox]').is(':checked') )
		{
	    	$("#affich").val("oui");
	    	/*$("#affich").css('visibility','visible');*/
		} 	
		else 
		{
		    $("#affich").val("non");
		}
	});
});