
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link rel="stylesheet" type="text/css" href="css/main.css">






<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}

$errors = array();
error_reporting(0);
//define a maxim size for the uploaded images in Kb

if(isset($_POST['login'])){
	$fullname = preg_replace('/[^A-Za-z]/', '', $_POST['fullname']);
	$ime = 'ime';
	$prezime =$_POST['prezime'];
	$korisnickoime =$_POST['korisnickoime'];
	$kucnibroj =$_POST['kucnibroj'];
	$grad =$_POST['grad'];
	$naselje =$_POST['naselje'];
	$drzava =$_POST['drzava'];
	$postanskibroj =$_POST['postanskibroj'];
	$email2 =$_POST['email2'];
	$mobitel =$_POST['mobitel'];
	$tel =$_POST['tel'];
	$facebook =$_POST['facebook'];
	$linkedin =$_POST['linkedin'];
	$skype =$_POST['skype'];
	$datumrodenja =$_POST['datumrodenja'];
	$oib =$_POST['oib'];
	$spol =$_POST['spol'];
	
	
	
	
}
  if(isset($_POST['login'])){
	//if(!file_exists('podaci/' . $_SESSION['username'] . '.xml'))
	//{
		$xml = new SimpleXMLElement('<podaci></podaci>');
		$xml->addChild('ime', $ime);
		$xml->addchild('prezime',$prezime);
		$xml->addchild('korisnickoime',$korisnickoime);
		$xml->addchild('kucnibroj',$kucnibroj);
		$xml->addchild('grad',$grad);
		$xml->addchild('naselje',$naselje);
		$xml->addchild('drzava',$drzava);
		$xml->addchild('postanskibroj',$postanskibroj);
		$xml->addchild('email2',$email2);
		$xml->addchild('mobitel',$mobitel);
		$xml->addchild('tel',$tel);
		$xml->addchild('facebook',$facebook);
		$xml->addchild('linkedin',$linkedin);
		$xml->addchild('skype',$skype);
		$xml->addchild('datumrodenja',$datumrodenja);
		$xml->addchild('oib',$oib);
		$xml->addchild('spol',$spol);
		

	
		
		$xml->asXML('podaci/' . $_SESSION['username'] . '.xml');
		

    echo "<script>alert('Podaci su uspješno uneseni.');</script>";
		//echo'Podaci su uspješno uneseni.';
		 
		//header('Location: index.php');
		//die;

	//}
  }

	$file = ('podaci/' . $_SESSION['username'] . '.xml');
  if (file_exists($file)) {
      $xml = simplexml_load_file($file);
 
  } 

	?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0040)http://127.0.0.1:8887/users/register.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE>Podaci korisnika</TITLE>     
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
		maboutme
			{
				
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
		.gender
			{
			width:15px;
			height:15px;
			
			}

        @media all and (min-width: 1024px)
        {
            .container
            {
	width: 80%;
            }
        }

    .maboutme {
	font-family: "Comic Sans MS", cursive;
	font-size: 10px;
	background-color: #CCC;
	position: relative;
	cursor: auto;
	border-bottom-style: none;
	width: 93%;
	height: 4cm;
}
</STYLE>
 
<META name="GENERATOR" content="MSHTML 10.00.9200.16384"></HEAD>     
<BODY>
<div class="header-container" >
<H1>
Podaci korisnika  <?php echo $_SESSION['username']; ?>
</H1>
  <header class="wrapper clearfix">

            </div>
        </header>
<DIV class="container">
<DIV class="account_management" id="error">    
           
<UL>
  <LI>Molimo ispunite sva polja u formi</LI>
  <LI>Stavite (-) na podacima koje ne želite ispuniti</LI>
 <?php
		if(count($errors) > 0){
			
			foreach($errors as $e){
				echo "<li><font color='red'>  $e . </li></font>";
			}
			
		}
		?></UL></DIV>
<H3><center>Podaci o korisniku:</center></H3>
<FORM action="" method="post">
<DIV>
  <p><BR>
    <strong>Osnovno:</strong></p>
  <table width="93%" border="0">
    <tr>
      <td><label>Ime:</label><input type="text" name="ime" value="<?php echo $xml->ime;?>" required /></td>
      <td><label>Prezime:</label><input type="text" name="prezime" value="<?php echo $xml->prezime;?>" required /></td>
 	  <td><label>Korisničko ime:</label><input type="text" name="korisnickoime" value="<?php echo $xml->korisnickoime;?>" required/></td>
    </tr>
    <tr>
 
     
      <td>&nbsp;</td>
    </tr>
  </table>
  <hr />
  <p><BR>

  <p><strong>Adresa:</strong>
  </p>

  </p>
  
  <table width="93%" border="0">
    <tr>
      <td><label>Kućni broj:</label><input type="text" name="kucnibroj" value="<?php echo $xml->kucnibroj;?>"  required /></td>
      <td><label>Grad:</label><input type="text" name="grad"  value="<?php echo $xml->grad;?>" required /></td>
      <td><label>Naselje:</label><input type="text" name="naselje"  value="<?php echo $xml->naselje;?>" required /></td>
    </tr>
    <tr>
      
      <td><label>Država:</label><input type="text" name="drzava"  value="<?php echo $xml->drzava;?>" required /></td>
      <td><label>Poštanski broj:</label><input type="text" name="postanskibroj"  value="<?php echo $xml->postanskibroj;?>" required /></td>
    </tr>
    <tr>
      

    </tr>
  </table>
  <p><hr />
  <p><strong>Kontakti:</strong>
  </p>

  </p>
  <table width="93%" border="0">
    <tr>
      <td><label>Email:</label><input type="text" name="email2"  value="<?php echo $xml->email2;?>" required /></td>
      <td><label>Mobitel:</label><input type="text" name="mobitel"  value="<?php echo $xml->mobitel;?>" required /></td>
      <td><label>Tel:</label><input type="text" name="tel"  value="<?php echo $xml->tel;?>" /></td>
    </tr>
    <tr>
      <td><label>Facebook:</label><input type="text" name="facebook"  value="<?php echo $xml->facebook;?>" required /></td>
      <td><label>LinkedIn:</label><input type="text" name="linkedin"  value="<?php echo $xml->linkedin;?>" required /></td>
      <td><label>Skype:</label><input type="text" name="skype"  value="<?php echo $xml->skype;?>" required /></td>
    </tr>
  
  </table>
  <p><hr />
  

  </p>


  <p><strong>Osobni podaci:</strong>
  </p>
  <table width="93%" border="0">
    <tr>
      <td width="31%"><label>Datum rođenja:</label><input type="date" name="datumrodenja"  value="<?php echo $xml->datumrodenja;?>" required /></td>
      <td width="31%"><label>OIB:</label><input type="text" name="oib"  value="<?php echo $xml->oib;?>" required /></td>
      <td width="31%"><label>Spol:</label><input type="text" name="spol"  value="<?php echo $xml->spol;?>" required /></td>
    </tr>
  </table>
   <p><hr />

  <p>&nbsp;</p>
<div><input type="submit" class="submit" value="Spremi" name="login" id="submit"/></div>
<form method="get" action="index.php">
<a href="index.php">Povratak</a>
</form>
</DIV></FORM></DIV>
<hr />
<div class="footer-container">
            <footer class="wrapper">
                <h3>&copy Emanuel Kardum 2018</h3>
            </footer>
        </div></BODY></HTML>
