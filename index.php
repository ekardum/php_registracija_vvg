<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link rel="stylesheet" type="text/css" href="css/main.css">
<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registracija</title>

    <style type="text/css">

        /* Normalize */
        html {
	font-family: sans-serif;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	
}
        body { margin: 0; background-color: #f7f7f7; }
        a { color: #ffffff } a:focus { outline: thin dotted; } a:active, a:hover { outline: 0; }
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
		.usernamex
			{
			font-family: "Courier New", Courier, monospace;
			text-align: right;
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
                width: 600px;
            }
        }

    </style>
</head>
<body>

        <div class="header-container" >
        <td><h2>Korisnik: <?php echo $_SESSION['username']; ?> </h2></td>
            <header class="wrapper clearfix">

            </div>
        </header>

        <div class="main-container">
            <div class="main wrapper clearfix">

        <table width="93%" border="0">
          
          <tr>
            <td ></td>
            <td class="usernamex"><?php
    
	$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
$imagename=$xml->photoname;

if(file_exists("$imagename"))
    $fileName = "$imagename";
else
    $fileName = "https://pbs.twimg.com/media/CD3QotgUEAE2TeR.jpg";
echo "<img src='$fileName' height='125' width='125' />";

?></td>

          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="usernamex"><a href="changepassword.php">Promjena lozinke</a>
  -
<a href="logout.php">Odjava</a></p></td>
          </tr>
        </table>

 
 		</h2>
  





<hr />

<center><h1><a href="korisnik.php" target="new">Osobni podaci</a></h1></center>

<hr />
<table width="93%" border="0" align="center">

 </table>
 </div>
 </div>

<div class="footer-container">
            <footer class="wrapper">
                <h3>&copy Emanuel Kardum 2018</h3>
            </footer>
        </div>

<script language=javascript src="uptime.js"></script></center></td>
  </tr>
</table>



</body>
</html>