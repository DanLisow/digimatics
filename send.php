<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$source = $_POST['source'];
$term = $_POST['term'];
$medium = $_POST['medium'];
$campaign = $_POST['campaign'];

    $to = 'austincev@gmail.com'; 
    $subject = 'Заявка с сайта Цифроматика'; 
    $message = '
                <html>
                    <head>
                        <title><b>' . $subject . '</b></title>
                    </head>
                    <body>
                        <p style="font-size:18px; border-bottom:1px solid #ccc; padding-bottom:15px; display:inline-block;">Заявка с сайта <a href="https://digimatics.ru">digimatics.ru</a></p>
                        <p><b>Имя: </b>' . $name . '</p>
                        <p><b>Телефон: </b>' . $phone . '</p>
                        <p><b>Текст: </b>' . $text . '</p>
                    </body>
                </html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: black-studio.digital@yandex.ru' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $subject, $message, $headers);