<?php
/*
mail($to,  $subject,  $message,  [$additional_headers],  [$additional_params])

отправляет электронную почту на адрес $to,

с темой $subject

содержанием письма $message.

Необязательный параметр $additional_headers – это строка или массив, которые  будут  вставлены
в  конец  отправляемых  заголовков  письма.

Параметр $additional_params может быть использован для передачи дополнительных
флагов в виде аргументов командной строки для программы, сконфигурированной для
отправки писем, указанной директивой sendmail_path.

Например, можно установить отправителя письма при использовании sendmail с помощью опции -f.
*/

mail('nivolyas@gmail.com', 'Example', 'test message');
// перед отправкой необходимо:
// connect to mailserver at "localhost" port 25,
// verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set()