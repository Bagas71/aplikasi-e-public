<?php

function sendMessage($message_text, $secret_token) {
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=922416562";
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
/*----------------------
POST method :
-----------------------*/
$message_text = $_POST ['message_text'];
/*--------------------------------
Isi TOKEN dibawah ini: 
--------------------------------*/
$secret_token = "901651845:AAEDoaTqEi6m-WBH2e1T8xOU8mjYHJ9XGZk";
sendMessage($message_text, $secret_token);
echo "<script>alert('Pesan berhasil terkirim!'); window.location.href = 'lapor.html';</script>";
?>