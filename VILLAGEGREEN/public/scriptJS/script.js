$(document).ready(function ()
{
	
	var i = 1;
	var pv = false;

	$(".infobulle").click(function()
	{
		console.log(pv);

		if(pv==false)
		{
			$(".infobulle").popover("show");
			$('.gris').css('z-index','1000');
			$('.gris').css('visibility','visible');		
			pv = true;
		}
		else
		{
			$(".infobulle").popover("hide");
			$('.gris').css('z-index','-1000');
			$('.gris').css('visibility','hidden');
			pv=false;
		}

		$(".btnLog").click(function()
		{
			if($(".id").val() == "toto" && $(".mdp").val() == "toto")
			{
				$(".cli").css('visibility','visible');
			}
		});	
	});

	$(".infobulle2").click(function()
	{
		console.log(pv);

		if(pv==false)
		{
			$(".infobulle2").popover("show");
			$('.gris').css('z-index','1000');
			$('.gris').css('visibility','visible');		
			pv = true;
		}
		else
		{
			$(".infobulle2").popover("hide");
			$('.gris').css('z-index','-1000');
			$('.gris').css('visibility','hidden');
			pv=false;
		}
	});

	$(".dropdown-menu a").click(function ()
	{
		$("#btntypes").html($(this).html());
		$("#btntypes").css('color','green');
		$("#inpttypes").val($("#btntypes").html());
		if($("#inpttypes").val() =="Particulier")
		{
			$("#inpttypes").val("0");
		}
		else if($("#inpttypes").val() =="Professionnel")
		{
			$("#inpttypes").val("1");
		}
	});

	$(".liensnom").click(function ()
	{
		/*var codeHTML += "<input type='text' value=''>"
		$("#FormForModif").*/
		console.log();
	});

});

