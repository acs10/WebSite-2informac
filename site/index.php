<html>
<center>
<head>
<meta charset="utf-8" />
<title> 2 informática </title>
<link rel="stylesheet" type="text/css"href="index.css"/>    
	<head>
	         
<!--===== incluir este código no head do site ===--> 
     <link rel="stylesheet" href="css/camera.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.tooltipster.js"></script>
	  
     <script src="js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
    <script src="js/modernizr.custom.js"></script>
     <script>
       $(document).ready(function(){
        jQuery('#camera_wrap').camera({
            loader: 'pie',
            pagination: true ,
            minHeight: '200',
            thumbnails: true,
            height: '25%',
               width: '15%',
			
			caption: true,
            navigation: true,
            fx: 'mosaic'
          });
        $().UItoTop({ easingType: 'easeOutQuart' });
               $('.tooltip').tooltipster();

        });
     </script>

   <style>
	#slider{
		width:880px ;
		
		
	}

   </style>
     </head>
     </head>
	 <title>sistema de login</title>
</head>
<body>
<body background="fundo caixa.jpg">
<img src="logopr.png" vspace="20" hspace="450" width="390" height="190">
<center>
</center>
</br>
</br>
<tr>
<td>&nbsp;</td>
</tr>
</body>

</center>

<table>
<center>
 <div id="sign-in" class="" >
             
              <form action="entrar.php" method="post">
                <input style="font-size:20px" autofocus="autofocus" class="form-input" id="user_login" label="false" name="login" placeholder="Email or Username" type="text" />
               <div style="font-size:20px"class="input password optional user_password"><input style="font-size:20px" class="password optional" id="user_password" name="senha" placeholder="Password" type="password" />
               <div style="font-size:20px"class="input boolean optional user_remember_me"><input name="user[remember_me]" type="hidden" value="0" /><input class="boolean optional" id="user_remember_me" name="user[remember_me]" type="checkbox" value="1" /><label class="boolean optional" for="user_remember_me">Remember me</label></div>
                <input style="font-size:20px" class="btn button" id="sign-in-form-submit" name="commit" type="submit" value="Sign In" />

				</form>
             
</div>
</center>
</table>

</html>


