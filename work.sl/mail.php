<?php
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
//Тут указываем на какой ящик посылать письмо
$to = "79991570874@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Форма клиента: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($email)."<br>
Пароль: ".htmlspecialchars($password);

// Отправляем письмо при помощи функции mail();
$headers = "From: work.sl <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>