<?php
$path = "https://api.telegram.org/bot1624529277:AAFWd7LMZTW7nCaHoILCKrhkEqU2VQfyeSw";

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if (strpos($message, "/ciao") === 0) {
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Hello World");
}
?>
