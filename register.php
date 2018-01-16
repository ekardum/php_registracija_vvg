<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link rel="stylesheet" type="text/css" href="css/main.css">
<?php
define ("MAX_SIZE","100000");
$errors = array();
error_reporting(0);
//define a maxim size for the uploaded images in Kb

if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$email = $_POST['email'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
	$securityquestion=$_POST['securityquestion'];
	$securityanswer=$_POST['securityanswer'];
	
}

	$image=$_FILES['image']['name'];
	


	
	if(file_exists('users/' . $username . '.xml'))
		{
		$errors[] = 'Korisničko ime već postoji';
		}
	if($username == '')
		{
		$errors[] = 'Korisničko ime je prazno';
		}
	if($email == ''){
		$errors[] = 'Email je prazan';
	}
	if($password == '' || $c_password == ''){
		$errors[] = 'Lozinka je prazna';
	}
	if($password != $c_password){
		$errors[] = 'Lozinke se ne podudaraju';
	}
	if($securityquestion == ''){
		$errors[] = 'Sigurnosno pitanje je prazno';
	}
	if($securityanswer == ''){
		$errors[] = 'Sigurnosni odgovor je prazan';
	}
	if ($image)
		{
		$filename = stripslashes($_FILES['image']['name']);
		$extension = getExtension($filename);
		$extension = strtolower($extension);
		$size=filesize($_FILES['image']['tmp_name']);
		}
	if(($file =='')&&($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")&&($size > MAX_SIZE*1024)){
		$errors[]='Niste odabrali dobru datoteku slike';
	}

	if(count($errors) == 0){
		$image_name=$username.'.'.$extension;

$newname="usersimages/".$image_name;

$copied = copy($_FILES['image']['tmp_name'], $newname);

		
		
		$xml = new SimpleXMLElement('<user></user>');
		$xml->addChild('username', $username);
		$xml->addChild('password', md5($password));
		$xml->addChild('email', $email);
		$xml->addChild('securityquestion', $securityquestion);
		$xml->addChild('securityanswer', md5($securityanswer));
		$xml->addChild('photoname',$newname);
		$xml->asXML('users/' . $username . '.xml');
		




		header('Location: login.php');
		die;

	}
	
function getExtension($str)
	 {
	$i = strrpos($str,".");
	if (!$i) 
		{
		 return ""; 
		 }
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	return $ext;
	}
	?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0040)http://127.0.0.1:8887/users/register.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE>Registracija</TITLE>     
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
            height: 37px;
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
<DIV id="header">        </DIV>
<DIV class="container">
<DIV class="account_management">     
           
<UL>

  <LI>Molimo ispunite sva polja u formi</LI>
 <?php
		if(count($errors) > 0){
			
			foreach($errors as $e){
				echo "<li><font color='red'>  $e . </li></font>";
			}
			
		}
		?></UL></DIV>
<H3>Registracija:</H3>
<FORM action="" enctype="multipart/form-data" method="post">
<DIV><LABEL>Korisničko ime:</LABEL><INPUT name="username" 
type="text"><BR><LABEL>Email</LABEL><INPUT name="email" 
type="text"><BR><LABEL>Lozinka:</LABEL><INPUT name="password" 
type="password"><BR><LABEL>Potvrdite lozinku:</LABEL><INPUT name="c_password" 
type="password"><BR><LABEL>Sigurnosno pitanje:</LABEL><INPUT name="securityquestion" 
type="text"><BR><LABEL>Sigurnosni odgovor:</LABEL><INPUT name="securityanswer" 
type="password"><BR><LABEL>Upload fotografije:</LABEL><INPUT name="image" 
type="file"><BR><INPUT name="login" class="submit" type="submit" value="Registracija"><BR><BR></DIV></FORM>
<DIV><A 
href="login.php">Prijava</A><BR></DIV></DIV></BODY></HTML>
