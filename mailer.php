<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
include '../conta.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try{
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';                   // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $meuEmail;                          // SMTP username
    $mail->Password = $minhaSenha;                        // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('marcos.oranmiyan@cbr.org.br', 'Mailer');
    $mail->addAddress('marcos.oranmiyan@cbr.org.br', 'ks');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Curso ' . $_POST['nomeCurso'] . ' enviado';
    $mail->Body    = 'Um curso foi enviado a partir do computador <i>'.$criadoPor.'</i>.<br>
    O inicio das inscricoes eh dia '.$_POST['InscricoesInicio'].'.';
    $mail->AltBody = 'Um curso foi enviado a partir do computador '.$criadoPor.'. O início das inscrições é dia '.$InscricoesInicio.'.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}