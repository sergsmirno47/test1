$(document).ready(function(){

    /*var width=window.innerWidth-40;    
    width = parseInt(width/141);
    var game_count = width;*/
   
});


var loadingGames=false;
var enough=false;
function loadGames(start)
{   
    //alert('+');
	if (!enough)
	{  //alert('+');
		loadingGames=true;
		$.ajax({
			url: root+"script/loadGames.php?q="+encodeURIComponent(loadGamesQuery)+"&start="+start+"&q2="+encodeURIComponent(loadGamesQuery2)+"&q3="+encodeURIComponent(loadGamesQuery3),
			success: function(data)
			{    //alert(data);
				$("#content").append(data);
				//cutLastLine(".justLoaded:eq(0)>.games");
				//$(".justLoaded img").css({"width":"0","height":"0"}).animate({"width":"160px","height":"121px"});
				//$(".justLoaded").attr("class","");
				loadingGames=false;
				if (data=="")
				{
					enough=true;
					$("#bottom").css({"height":"0"});
				}
                else
                {
                    var width=window.innerWidth-40;    
                    var game_count = parseInt(width/141);
                    marginGamePrew(game_count);
                }
			}
		});
	}
}
var start=loadGamesStart-50;
window.setInterval("if(!loadingGames&&((window.pageYOffset+window.innerHeight)>(document.getElementById(\'bottom\').offsetTop+100)))loadGames(start+=50)",100);

function empty(){

	if (document.getElementById('search_text2').value == "search...") {
		document.getElementById('search_text2').value = "";
	}
}
