<?php

$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8511058680:AAEkeSOHQq8KmRUlbW-18WSE6prc6Xgkm7s";
$chat_id = "-5190155465";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

$text = "";

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . $value . "</b>\n";
}

$sendToTelegram = fopen(
  "https://api.telegram.org/bot{$token}/sendMessage?" . http_build_query([
    "chat_id" => $chat_id,
    "text" => $text,
    "parse_mode" => "HTML"
  ]),
  "r"
);

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

echo "<br>Привет, " . $user_name . "<br>";
echo "Ваш номер телефона: <b>" . $user_phone . "</b>";

?>