<?php

$my_file = "postal-" . $_POST["postal"] . ".jpg"; // puede ser cualquier formato
$my_path = "./media/postales/";
$my_name =  $_POST["nombre"];
$my_mail =  "postales@yermocapital.hol.es";
$my_replyto = "";
$my_subject = "Postal de Yermo Capital!";
$my_message = $_POST["mensaje"];
$mail_to = $_POST["email"];
mail_attachment($my_file, $my_path, $mail_to, $my_mail, $my_name, $my_replyto, $my_subject, $my_message);

function mail_attachment($filename, $path, $mail_to, $from_mail, $from_name, $replyto, $subject, $body) {
    $file = $path.$filename;
$file_size = filesize($file);
$handle = fopen($file, "r");
$content = fread($handle, $file_size);
fclose($handle);

$content = chunk_split(base64_encode($content));
$uid = md5(uniqid(time()));
$name = basename($file);

$eol = PHP_EOL;

$header = "From: ".$from_name." <".$from_mail.">".$eol;
$header .= "Reply-To: ".$replyto.$eol;
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"";
$message = "--".$uid.$eol;
$message .= "Content-Type: text/html; charset=ISO-8859-1".$eol;
$message .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$message .= $body.$eol;
$message .= "--".$uid.$eol;
$message .= "Content-Type: application/pdf; name=\"".$filename."\"".$eol;
$message .= "Content-Transfer-Encoding: base64".$eol;
$message .= "Content-Disposition: attachment; filename=\"".$filename."\"".$eol;
$message .= $content.$eol;
$message .= "--".$uid."--";

if (mail($mail_to, $subject, $message, $header))
{
    header('Location: ./estado_postal.php?estado=Enviado correctamente');

}
else
{
    header('Location: ./estado_postal.php?estado=Error Envio');;
}
}
?>