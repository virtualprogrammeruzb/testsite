<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $ip = $data['ip'];

    $to = 'bekzodtursunov237@mail.ru'; // O'z elektron pochtangizni yozing
    $subject = 'Foydalanuvchi IP manzili';
    $message = 'Foydalanuvchining IP manzili: ' . $ip;
    $headers = 'From: no-reply@yourdomain.com' . "\r\n" .
               'Reply-To: no-reply@yourdomain.com' . "\r\n";

    mail($to, $subject, $message, $headers);
}
?>
