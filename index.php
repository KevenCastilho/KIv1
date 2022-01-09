<html> 
<head>
<title>.:. Killer Instinct Classic .:.</title>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 0);
define('s_page',true);
include('./includes/config.inc.php');

  $bg = array('bg_04.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<style type="text/css">

body{
background-image:url(style/images/<?php echo $selectedBg; ?>); 
  -webkit-background-size: 100% 100%;
  -moz-background-size: 100% 100%;
  -o-background-size: 100% 100%;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-attachment:fixed;
}

</style>
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">       
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen"/>     
<link rel="stylesheet" href="style/fancy.css" type="text/css" media="screen"/>     
<link type="text/css" href="style/ui-darkness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
<link rel="shortcut icon" href="./style/images/favicon.ico"/>   
<script>
var SV_NAME = '<?php echo SV_NAME; ?>';
var TITLE_SEPARATOR = '<?php echo TITLE_SEPARATOR; ?>';
</script>
<script type="text/javascript" src="js/jQuery.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryModer.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryFuncs.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryLogin.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryRegSt.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryConfg.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryNavL.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryFancy.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryRankg.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryUI.js" charset="UTF-8"></script>

    </head>

    <body>
        <ul id="nav">
            <li><a navid="Sobre">Home</a></li>
            <li><a navid="Registro">Registro</a></li>
            <li><a navid="Download">Download</a></li>
            <li><a navid="Donate">Donate</a></li>
			<li><a navid="Chat">Chat</a></li>
			<li><a navid="Sobre">Sobre</a></li>
			<li><a navid="gb">Play GB</a></li>
			<li><a navid="snes">Play SNES</a></li>
            <li><a navid="Ranking">Ranking</a></li>  
        </ul>
                </br>  
        <div id="logo"></div>
        
        <div id="content">
            <div id="left">
                <div class="painel" id="status">
                    <h2> </h2>
                    <p>Status do Servidor: <span style="color:Green;">Online</span></p>
                </div>
                <div class="painel" id="login">
                                        <div class="center"> 
                      <p>Carregando...</p>
                    </div>
                </div>
            </div>
            
            <div id="center">
                <div class="painel">
               <script>
			   $(document).ready(function(){
			   $('#center .painel').LoadPage({'Link':'./pages/about.php','Title':'Home','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
			   })
			   </script>
                </div>
            </div>
        </div>
<!--<script type="text/javascript" src="https://www.scmplayer.net/script.js" 
data-config="{
	'skin':'skins/scmRed/skin.css',
	'volume':100,
	'autoplay':true,
	'shuffle':false,
	'repeat':1,
	'placement':'bottom',
	'showplaylist':false,
	'playlist':[
	{'title':'01 Main Theme','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kOST/01MainTheme.mp3'},
	{'title':'01._K._I._Feeling','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/01._K._I._Feeling.mp3'},
	{'title':'02._The_Way_U_Move','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/02._The_Way_U_Move.mp3'},
	{'title':'03._Controlling_Transmission','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/03._Controlling_Transmission.mp3'},
	{'title':'04._Oh_Yeah','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/04._Oh_Yeah.mp3'},
	{'title':'05._Its_A_Jungle','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/05._Its_A_Jungle.mp3'},
	{'title':'06._Do_It_Now','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/06._Do_It_Now.mp3'},
	{'title':'07._Full-Bore','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/07._Full-Bore.mp3'},
	{'title':'08._The_Instinct','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/08._The_Instinct.mp3'},
	{'title':'09._Yo_Check_This_Out','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/09._Yo_Check_This_Out.mp3'},
	{'title':'10._Freeze','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/10._Freeze.mp3'},
	{'title':'11._Trailblazer','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/11._Trailblazer.mp3'},
	{'title':'12._Tooth_and_Claw','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/12._Tooth_and_Claw.mp3'},
	{'title':'13._Ya_Ha_Haa','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/13._Ya_Ha_Haa.mp3'},
	{'title':'14._Rumble','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/14._Rumble.mp3'},
	{'title':'15._The_Extreme','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/15._The_Extreme.mp3'},
	{'title':'30._Groovy_Humiliation','url':'<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>Sounds/kCUTS/30._Groovy_Humiliation.mp3'}]}" 
	></script>-->
    </body> 
</html>