var listeFilms = null;
var idFilm;

$(document).ready(function () 
{
	$("body").pagecontainer({
  		change: function( event, ui ) 
  		{
  			var p = $("body").pagecontainer( "getActivePage" );
  			if (p.attr("id")=="page2") 
  			{
  				$("#search").button('disable');
  			}
  			else if (p.attr("id")=="page4")
  			{
  				$.get("http://dl.bienvu.net/vince09/api/liste.php",function(data)
  				{
  					$("#label4").html("");
  					//results = data;

  					for (var i = 0; i < data.length; i++) 
  					{
  						var idf=data[i].ID;
  						var url = "http://api.themoviedb.org/3/movie/" + idf + "?api_key=f33cd318f5135dba306176c13104506a"

  						$.get(url, function(data2) 
            			{	
								console.log(data2.title);
                    			var li = "<li>";
                    			li += "<a href='#' data-id='" + i + "' class='filmdetail'  data-transition='slide'>";
                    			li += "<img src='https://image.tmdb.org/t/p/w185" + data2.poster_path + "' />";
                    			li += "<h3>" + data2.title + "</h3>";
                    			li += "<h3>" + data2.overview + "</h3>";                 
                    			li += "</a>";
                    			li += "</li>";
                    			$("#label4").append(li);
            			});
            		}
  				})
  			}
  		}
	});
   	

   	$("#text").on('input propertychange paste', function ()
   	{
        if ($("#text").val() == "")
            $("#search").button('disable');
        else
            $("#search").button('enable');
   	});

   	$("#search").click(function () 
    {
        $("#label1").html("");

        $.get("http://api.themoviedb.org/3/search/movie?api_key=f33cd318f5135dba306176c13104506a&language=fr&query=" + $("#text").val(), function (data) 
        {
            if (data.results != "") 
            {
                listeFilms = data.results;
                for (var i = 0; i < listeFilms.length; i++) 
                {
                    var date = new Date();
                    date = listeFilms[i].release_date.toString();
                    var spliter = date.split("-");
                    date = spliter[2] + "/" + spliter[1] + "/" + spliter[0];

                    var li = "<li>";
                    li += "<a href='#page3' data-id='" + i + "' class='filmdetail'  data-transition='slide'>";
                    li += "<img src='https://image.tmdb.org/t/p/w185" + listeFilms[i].poster_path + "' />";
                    li += "<h3>" + listeFilms[i].title + "</h3>";
                    li += "<h3>" + listeFilms[i].overview + "</h3>";
                    li += "<p>" + date + "</p>";
                    li += "</a>";
                    li += "</li>";
                    $("#label1").append(li);
                }
                $('#label1').listview('refresh');

                $(".filmdetail").click(function () 
                {
                    var i = $(this).data("id");
                    idFilm = i;
                    det = "";
                    det += "<img src='https://image.tmdb.org/t/p/w500" + listeFilms[i].poster_path + "'/>";
                    det += "<a class='filmdetail'><h1>" + listeFilms[i].title + "</h1></a></br></br></br>";
                    det += "<a class='filmdetail'>Desription : " + listeFilms[i].overview + "</a></br></br>";
                    det += "<a class='filmdetail'>Popularité : " + listeFilms[i].popularity + "</a></br>";
                    det += "<a class='filmdetail'>Nombre de vote : " + listeFilms[i].vote_count + "</a></br>";
                    $("#label2").html(det);

                    if (listeFilms[i].vote_count > 0) 
                    {
                        $("#label2").append("<a class='filmdetail'>Vote : " + listeFilms[i].vote_average + "</a></br>");
                    }

                    $("#add").click(function()
    				{	
    					var i = idFilm;
						//document.location.href="dl.bienvu.net/vince09/api/insert.php?titre=" + listeFilms[i].title + "&description="+listeFilms[i].overview+"&pop="+listeFilms[i].popularity+"&nbvote="+listeFilms[i].vote_count+"&moyvote="+listeFilms[i].vote_average;       				
						$.get("http://dl.bienvu.net/vince09/api/insert.php","id=" + listeFilms[i].id, function () 
						{
								console.log (""+listeFilms[i].id);
						});	
    				});
                });
            }
            else 
            {
                $('#label1').html('</br><p id="nores">Aucun résultat</p>');
            }

        });
    });
});