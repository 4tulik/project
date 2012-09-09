Podgląd twojej opinii:
<div class="opinia_uzytkownika">
 
    <hr class="center"/>
<?php
    require_once 'funkcje/dodajOpinie.php';

if(isset($_POST["captcha"]))
if($_SESSION["captcha"]==$_POST["captcha"])
{
    //CAPTHCA is valid; proceed the message: save to database, send by e-mail ...
	echo 'CAPTHCA is valid; proceed the message';
}
else
{
	echo 'CAPTHCA is not valid; ignore submission';
}


//require("phpmailer/class.phpmailer.php");
//$mail = new PHPMailer();
//$mail->IsSMTP();
//$mail->SMTPAuth   = true;                  // enable SMTP authentication
//$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
//$mail->PluginDir = "phpmailer/";
//$mail->From = "onet.pl"; //adres naszego konta
//$mail->FromName = "naglowek wiadomosci";//nagłówek From
//$mail->Host = "smtp.gmail.com";//adres serwera SMTP
//$mail->Port       = 465;
//$mail->Mailer = "smtp";
//
//$mail->Username = "4tulik";//nazwa użytkownika
//$mail->Password = "ph49bxc3xa9w";//nasze hasło do konta SMTP
//$mail->SMTPAuth = true;
//$mail->SetLanguage("en", "phpmailer/language/");
//
//$mail->Subject = "Mail testowy";//temat maila
//
//// w zmienną $text_body wpisujemy treść maila
//$text_body = "Cześć, chyba phpMailer działa \n\n";
//$text_body .= "Na zawsze Twój, \n";
//$text_body .= "PHPMailer";
//
//$mail->Body = $text_body;
//// adresatów dodajemy poprzez metode 'AddAddress'
//$mail->AddAddress("4tulik@gmail.com","Kolega");
//
//
//if(!$mail->Send())
//echo "There has been a mail error <br>";
//echo $mail->ErrorInfo."<br>";
//
//// Clear all addresses and attachments
//$mail->ClearAddresses();
//$mail->ClearAttachments();
//echo "mail sent <br>"; 
?></div>
<form method="post" action="">

<tr><td align="center">CAPTCHA:<br>
	(antispam code, 3 black symbols)<br>
<img src="funkcje/captcha.php" alt="captcha image"><input type="text" name="captcha" size="3" maxlength="3">
<input type="submit" value="Submit">
</form>
        <hr class="center"/>