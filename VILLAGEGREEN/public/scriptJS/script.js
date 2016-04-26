$(document).ready(function ()
{
	$(function () 
	{
		$("#infobulle").popover
		({
			html : true,
			content : "bonjour</br> nichon <b>bite</b> zizi couille cul",
			placement : "bottom",
		});
	})
	

	$("#infobulle").click(function()
	{
		$("#infobulle").popover("toggle");
		console.log("frc bg");
	});

});