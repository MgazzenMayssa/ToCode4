<?php
  $url = 'http://localhost/tocode4/RWS1/user.php';
  $cin = $_POST["cin"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
	$data = array('cin' => $cin,'name' => $name, 'email' => $email, 'password' => $password);

	
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { /* Handle error */ }

	var_dump($result);
?>