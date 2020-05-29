<?php
$ch = curl_init("https://fcm.googleapis.com/fcm/send");
$header=array('Content-Type: application/json',
"Authorization: key=AAAAAC8hb5I:APA91bFDSY3YEQi9biRHlEn3ZtC_OnPQqpwUOsv3VuhcpUuEqlYYIyHu5qPeCC7C88H0d0j088UN-yoc3XduDktk6sVWSATeulcWMwh5spER4CNQm1nK1UkFEEVoyR1KvYT5VIR6AJl7");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"notification\": {    \"title\": \"Test desde curl\",    \"text\": \"Otra prueba\"  },    \"to\" : \"d0Ou5PR0_mA:APA91bFhq0gVl5Heudm9Ou1Dl9rhimPUIrsVi5Jsv6YnuledEeoMbR3aokJlenfbQZz01AZSnlGabTD18amuqqvmQgauOH2kbxY3pUksnXKIWPUx0u8gI4_RUBP65KGxmwSxLGKPGj76\"}");

curl_exec($ch);
curl_close($ch);
?>