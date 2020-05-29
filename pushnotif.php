<?php 


	function send_notification ($tokens, $message)
	{
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
			 'registration_ids' => $tokens,
			 'data' => $message
			);

		$headers = array(
			'Authorization:key = AAAAAC8hb5I:APA91bFDSY3YEQi9biRHlEn3ZtC_OnPQqpwUOsv3VuhcpUuEqlYYIyHu5qPeCC7C88H0d0j088UN-yoc3XduDktk6sVWSATeulcWMwh5spER4CNQm1nK1UkFEEVoyR1KvYT5VIR6AJl7',
			'Content-Type: application/json'
			);

	   $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);           
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
       }
       curl_close($ch);
       return $result;
	}
	$host = "sql105.epizy.com";
    $db_name = "epiz_25882415_fcm";
    $username = "epiz_25882415";
    $password = "jZVeN8uFEfQt6q";
    try
  {
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
  catch(PDOException $exception)
  {
            echo "Connection error: " . $exception->getMessage();
        }
    $result = $conn->query("Select Token From users")->fetchAll();
	
	$tokens = array();

	if($result->rowCount() > 0 ){

		foreach ($result as $row) {
			$tokens[] = $row["Token"];
		}
	}


	$message = array("message" => " FCM PUSH NOTIFICATION TEST MESSAGE");
	$message_status = send_notification($tokens, $message);
	echo $message_status;



 ?>