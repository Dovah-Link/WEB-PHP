/*------------------------------------------------------------- Variables HTML ------------------------------------------------------------*/

var contenu = document.getElementById("contenu");
var go = document.getElementById("go");
var label1 = document.getElementById("label1");
var soci = document.getElementById("soci");
var cont = document.getElementById("cont");
var adrs = document.getElementById("adrs");
var dd = document.querySelectorAll(".dropdown-menu  a");
var riri = document.getElementById("riri");
var cp = document.getElementById("cp");
var ville = document.getElementById("ville");
var mail = document.getElementById("mail");
var tel = document.getElementById("tel");
var cancel = document.querySelector("#btnnok");
var form = document.querySelector("#form");

/*------------------------------------------------------------- Variables RegEx ------------------------------------------------------------*/

/*var RepSoci = /^[A-Za-z0-9 ']{2,}$/;*/
/*var RepCont = /^[A-Za-z '-]{2,}$/;*/
/*var RepAdrs = /^([0-9]{1,4}){1}([ ]{1}[A-Za-z0-9]+){1,}/;*/
/*var RepCp = /^[0-9]{5}$/;*/
/*var RepVille = /^[A-Za-z0-9\ éèàçâêûîôäëüïö-]{2,}$/;*/
/*var RepMail = /^([A-Za-z0-9 -_.]+[A-Za-z0-9]*)@([A-Za-z]{2,})(.([A-Za-z]{2,3}))+$/;
*//*var RepTel = /^[0-9]{10}$/;*/

/*------------------------------------------------------------- Affichage dans dropdown ------------------------------------------------------------*/

for(var x=0; x<dd.length; x++)
{
	dd[x].addEventListener("click", dropdown);
}

/*------------------------------------------------------------- Fonctions  ------------------------------------------------------------------------*/

/*function display()
{
	contenu.style.visibility="visible";
}*/

function dropdown()
{
	//riri.innerHTML = this.innerHTML;
	//riri.style.color = "green";
}

/*function verifSoci()
{
	console.log(soci);
	if(RepSoci.test(soci.value)==true )
	{
		console.log("ok");
		soci.style.borderColor="green";

	}
	else
	{
		if (soci.value == "") {
			soci.style.borderColor="rgb(204, 204, 204)";
		}
		else { 
			soci.style.borderColor="red";
			console.log("nop");
		}
	}
}*/

/*function verifCont()
{
	if(RepCont.test(cont.value)==true)
	{
		console.log("ok");
		cont.style.borderColor="green";
	}
	else
	{
		if(cont.value=="")
		{
			cont.style.borderColor="rgb(204, 204, 204)";
		}
		else
		{
			cont.style.borderColor="red";
			console.log("nop");
		}
	}
}*/

/*function verifAdrs()
{
	if(RepAdrs.test(adrs.value)==true)
	{
		console.log("ok");
		adrs.style.borderColor="green";
	}
	else
	{
		if(adrs.value=="")
		{
			adrs.style.borderColor="rgb(204, 204, 204)";
		}
		else
		{
			adrs.style.borderColor="red";
			console.log("nop");
		}
		
	}
}
*/
/*function verifCP()
{
	if(RepCp.test(cp.value)==true)
	{
		console.log("ok");
		cp.style.borderColor="green";
	}
	else
	{
		if(cp.value=="")
		{
			cp.style.borderColor="rgb(204, 204, 204)";
		}
		else
		{
			cp.style.borderColor="red";
			console.log("nop");
		}
		
	}
}*/

/*function verifVille()
{
	if(RepVille.test(ville.value)==true)
	{
		console.log("ok");
		ville.style.borderColor="green";
	}
	else
	{
		if(ville.value=="")
		{
			ville.style.borderColor="rgb(204, 204, 204)";
		}
		else
		{
			ville.style.borderColor="red";
			console.log("nop");
		}
	}
}*/
/*function verifMail()
{
	if(RepMail.test(mail.value)==true)
	{
		console.log("ok");
		mail.style.borderColor="green";
	}
	else
	{
		if(mail.value=="")
		{
			mail.style.borderColor="rgb(204, 204, 204)";
		}
		else
		{
			mail.style.borderColor="red";
			console.log("nop");		
		}
	}
}*/

/*function verifTel()
{
	if(RepTel.test(tel.value)==true)
	{
		console.log("ok");
		tel.style.borderColor="green";
	}
	else
	{
		if(tel.value=="")
		{
			tel.style.borderColor="rgb(204, 204, 204)";
		}
		else
		{
			tel.style.borderColor="red";
			console.log("nop");
		}
	}
}*/
/*function FCancel()
{
	var a = confirm("Voulez vous annuler la saisie ?")
	if (a==true) 
	{
    	soci.value="";
    	cont.value="";
    	adrs.value="";
    	cp.value="";
    	ville.value="";
    	mail.value="";
    	tel.value="";
    	soci.style.borderColor="rgb(204, 204, 204)";
		cont.style.borderColor="rgb(204, 204, 204)";
		adrs.style.borderColor="rgb(204, 204, 204)";
		cp.style.borderColor="rgb(204, 204, 204)";
		ville.style.borderColor="rgb(204, 204, 204)";
		mail.style.borderColor="rgb(204, 204, 204)";
		tel.style.borderColor="rgb(204, 204, 204)";
	}
	else 
	{
		console.log("Super utile....");
	}
}*/

function Verif(evt)
{
	if (RepSoci.test(soci.value) == false || RepCont.test(cont.value) == false || RepAdrs.test(adrs.value) == false || RepCp.test(cp.value) == false || RepVille.test(ville.value) == false || RepMail.test(mail.value) == false || RepTel.test(tel.value) == false)
	{
		evt.preventDefault();
		alert("il y a une erreur");
	}
}
/*------------------------------------------------------------- Evenements  ------------------------------------------------------------------------*/

/*soci.addEventListener("input",verifSoci);*/
/*cont.addEventListener("input",verifCont);*/
/*adrs.addEventListener("input",verifAdrs);*/
/*cp.addEventListener("input", verifCP);*/
/*ville.addEventListener("input", verifVille);*/
/*mail.addEventListener("input", verifMail);*/
/*tel.addEventListener("input", verifTel);*/
form.addEventListener("submit",Verif)
/*cancel.addEventListener("click", FCancel);*/

/*go.addEventListener("click", display);*/

