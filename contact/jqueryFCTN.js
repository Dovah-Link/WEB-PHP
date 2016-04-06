$(document).ready(function()
{
	for(var x=0; x<$("dropdown-menu").length; x++)
	{
		$(".dd")[x].addEventListener("click", dropdown);

	}

	$("#go").click(function () 
	{
		console.log("ok");
		$("#contenu").css('visibility','visible');
	});

	$("#soci").on('input propertychange paste',function()
	{
		if($("#soci").val().match(/^[A-Za-z0-9 ']{2,}$/))
		{
			$("#soci").css('borderColor','green');
		}
		else
		{
			if ($("#soci").val() == '') 
			{
				$("#soci").css('borderColor','rgb(204, 204, 204)');
			}
			else 
			{ 
				$("#soci").css('borderColor','red');
			}
		}
	});

	$("#cont").on('input propertychange paste',function()
	{
		if($("#cont").val().match(/^[A-Za-z '-]{2,}$/))
		{
			$("#cont").css('borderColor','green');
		}
		else
		{
			if($("#cont").val() == '')
			{
				$("#cont").css('borderColor','rgb(204, 204, 204)');
			}
			else
			{
				$("#cont").css('borderColor','red');
			}
		}
	});

	$("#adrs").on('input propertychange paste',function()
	{
		if($("#adrs").val().match(/^([0-9]{1,4}){1}([ ]{1}[A-Za-z0-9]+){1,}/))
		{
			$("#adrs").css('borderColor','green');
		}
		else
		{
			if($("#adrs").val() == '')
			{
				$("#adrs").css('borderColor','rgb(204, 204, 204)');
			}
			else
			{
				$("#adrs").css('borderColor','red');
			}
			
		}
	});

	$("#cp").on('input propertychange paste',function()
	{
		if($("#cp").val().match(/^[0-9]{5}$/))
		{
			$("#cp").css('borderColor','green');
		}
		else
		{
			if($("#cp").val() == '')
			{
				$("#cp").css('borderColor','rgb(204, 204, 204)');
			}
			else
			{
				$("#cp").css('borderColor','red');
			}
			
		}
	});

	$("#ville").on('input propertychange paste',function()
	{
		if($("#ville").val().match(/^[A-Za-z0-9\ éèàçâêûîôäëüïö-]{2,}$/))
		{
			$("#ville").css('borderColor','green');
		}
		else
		{
			if($("#ville").val() == '')
			{
				$("#ville").css('borderColor','rgb(204, 204, 204)');
			}
			else
			{
				$("#ville").css('borderColor','red');
			}			
		}
	});

	$("#mail").on('input propertychange paste',function()
	{
		if($("#mail").val().match(/^([A-Za-z0-9 -_.]+[A-Za-z0-9]*)@([A-Za-z]{2,})(.([A-Za-z]{2,3}))+$/))
		{
			$("#mail").css('borderColor','green');
		}
		else
		{
			if($("#mail").val() == '')
			{
				$("#mail").css('borderColor','rgb(204, 204, 204)');
			}
			else
			{
				$("#mail").css('borderColor','red');
			}
			
		}
	});

	$("#tel").on('input propertychange paste',function()
	{
		if($("#tel").val().match(/^[0-9]{10}$/))
		{
			$("#tel").css('borderColor','green');
		}
		else
		{
			if($("#tel").val() == '')
			{
				$("#tel").css('borderColor','rgb(204, 204, 204)');
			}
			else
			{
				$("#tel").css('borderColor','red');
			}		
		}
	});
	$("#btnok").click(function()
	{
		if($("#envir").val()=="" || $("#envir").val()=="Dropdown")
		{
			alert("Veuillez choisir un environnement de travail !");
		}
		else
		{
			$("#form").submit();
		}
	});

	$("#btnnok").click(function()
	{
		$(".form-control").css('borderColor','rgb(204, 204, 204)');
	});


	$(".dropdown-menu a").click(function ()
	{
		$("#riri").html($(this).html());
		$("#riri").css('color','green');
		$("#envir").val($(this).html());
	});
});