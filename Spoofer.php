<?php

$to = 'geroi202@mail.ru';

$subject = 'the subject';

$message = 'Здраствуйте,отправте нам свой пароль';

$headers = 'From:mailrusupport@mail.ru ";

mail($to, $subject, $message, $headers);

?>
