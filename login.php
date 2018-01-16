<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link rel="stylesheet" type="text/css" href="css/main.css">
<?php
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$password = md5($_POST['password']);
	if(file_exists('users/' . $username . '.xml')){
		$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
		if($password == $xml->password){
			session_start();
			$_SESSION['username'] = $username;
			header('Location: index.php');
			die;
		}
	}
	$error = true;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0037)http://127.0.0.1:8887/users/login.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE>Prijava</TITLE> 
<META http-equiv="Content-Type" content="text/html; charset=windows-1252">
<STYLE type="text/css">

        /* Normalize */
        html { font-family: sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        body { margin: 0; background-color: #f7f7f7; }
        a { color: #4089db } a:focus { outline: thin dotted; } a:active, a:hover { outline: 0; }
        strong { font-weight: bold; } small { font-size: 80%; }
        input { font-family: inherit; font-size: 15px; margin: 0; }
        input { line-height: normal; }, input[type="submit"] { -webkit-appearance: button; cursor: pointer; }
        input::-moz-focus-inner { border: 0; padding: 0; }
        ul { margin: 0; }

        #header
        {
            height: 40px;
            background: url("header_bg.png") 0 0 repeat-x;
            width: 100%;
        }
        .container
        {
            padding: 20px;
            margin: 20px auto 0 auto;
            font-size: 14px;
            text-align: left;
            background-color: #fff;
            border: solid 1px #bababa;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        small
        {
            font-size: 70%;
            color: #7c7c7c;
        }

        label
        {
            display: block;
            font-size: 15px;
            line-height: 20px;
            margin-bottom: 5px;
            color: #404040;
        }

        hr
        {
            background-color: #bababa;
            height: 1px;
            border: 0;
        }

        input
        {
            display: inline-block;
            height: 42px;
            line-height: 27px;
            padding: 5px;
            margin-bottom: 10px;
            color: #555555;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            vertical-align: middle;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            width: 233px;
        }

        .submit
        {
            display: inline-block;
            height: 35px;
            line-height: 35px;
            padding: 0 5px;
            margin-top: 10px;
            color: #ffffff;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
            text-decoration: none;

            border: 0;

            background-color: #6bc135;
            background-image: -moz-linear-gradient(top, #a0e71b, #41af00);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#a0e71b), to(#41af00));
            background-image: -webkit-linear-gradient(top, #a0e71b, #41af00);
            background-image: -o-linear-gradient(top, #a0e71b, #41af00);
            background-image: linear-gradient(to bottom, #a0e71b, #41af00);
            background-repeat: repeat-x;
        }

        .submit:hover
        {
            -webkit-box-shadow: inset rgba(192, 234, 53, 0.75) 0 0 10px;
            -moz-box-shadow: inset rgba(192, 234, 53, 0.75) 0 0 10px;
            box-shadow: inset rgba(192, 234, 53, 0.75) 0 0 10px;
        }

        .submit:active
        {
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .alert, .err_r
        {
            display: block;
            position: relative;
            padding: 4px;
            margin-bottom: 5px;
            font-size: 12px;
            color: #930B0D;
            text-align: left;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color: #FEBEBE;
            border: 1px solid #e62b38;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .login_banner, .account_management
        {
            background-color: #EDFFE7;
            padding: 10px;
            border: solid 1px #bababa;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .account_management
        {
            margin-bottom: 10px;
        }

        @media all and (min-width: 1024px)
        {
            .container
            {
                width: 400px;
            }
        }

    </STYLE>
 
<META name="GENERATOR" content="MSHTML 10.00.9200.16384"></HEAD> 
<BODY>

<DIV class="container">
<DIV class="account_management">
<UL>

  <?php
		if($error){
			echo '<li><font color="red">Pogrešno korisničko ime i/ili lozinka</font></li>';
		}
		?></UL></DIV>
<H3>Prijava</H3>
<FORM action="" method="post"><LABEL>Korisničko ime:</LABEL><INPUT name="username" 
type="text" size="20">		  <LABEL>Lozinka:</LABEL><INPUT name="password" type="password" 
size="20">						 
<P><INPUT name="login" class="submit" type="submit" value="Prijava"></P></FORM><A 
href="register.php">Registracija</A> 
</DIV></BODY></HTML>
