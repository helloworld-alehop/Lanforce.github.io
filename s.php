<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['nombre'];
    $email = $_POST['email'];

    // Тут можно сохранять в базу данных, отправлять email и т.д.
    echo "Спасибо, $name! Мы получили ваш email: $email";
}
?>
