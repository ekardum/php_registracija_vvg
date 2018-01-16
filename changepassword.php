<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link rel="stylesheet" type="text/css" href="css/main.css">
<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
$error = false;
if(isset($_POST['change'])){
	$old = md5($_POST['o_password']);
	$new = md5($_POST['n_password']);
	$c_new = md5($_POST['c_n_password']);
	$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
	if($old == $xml->password){
		if($new == $c_new){
			$xml->password = $new;
			$xml->asXML('users/' . $_SESSION['username'] . '.xml');
			header('Location: logout.php');
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
	 <TITLE>Promjena lozinke</TITLE> 
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
                width: 600px;
            }
        }

    </STYLE>
 
<META name="GENERATOR" content="MSHTML 10.00.9200.16384"></HEAD> 
<BODY>
<DIV id="header"><IMG class="XtGem logo" style="margin: 5px 0px 0px 5px;" alt="" 
src="sadakpramodh.jpg">         </DIV>
<DIV class="container">
<div class="account_management">
<UL>

 
       <?php 
		if($error){
            
			echo "<li><font color='red'>Pogrešno unesena lozinka</font></li>";
            
		}

		?>
        </ul>
        </div>
        <h3>Promjena lozinke:</h3>

	<form method="post" action="">
		<div>
        
            

        

        <label>Stara lozinka:</label>
		<input type="password" name="o_password" /><br />
		<label>Nova lozinka:</label><input type="password" name="n_password" /><br />
		<label>Potvrdite novu lozinku:</label><input type="password" name="c_n_password" /><br />
		<input type="submit" class="submit" name="change" value="Promijeni lozinku" />
        </div>
        
	</form>
	<hr />
	<a href="index.php">Početna</a>
</body>
</html>