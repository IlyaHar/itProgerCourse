<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

try {
    $parsedown = new Parsedown();
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '013469f36db924';
    $mail->Password = '5859071a219cf8';
    $mail->CharSet = 'utf8';

    $mail->setFrom('b474756d8c-05917f@inbox.mailtrap.io', 'Mailer');
    $mail->addAddress('harcenkoila278@gmail.com', 'Ilya');

    $mail->isHTML(true);
    $mail->Subject = 'Сообщение с PHP';
    $mail->Body = $parsedown->text('**Привет!** _Это собщение отправлено с **PHP**_');;

    $mail->send();
    echo 'Сообщение успешно отправлено!';
} catch (Exception $e) {
    echo "К сожелению сообщение не отправилось :(. Ошибка: $mail->ErrorInfo";
}
