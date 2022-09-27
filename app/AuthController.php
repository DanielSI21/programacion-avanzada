<?php

if (isset($_POST['action'])){
	switch($_POST['action']){
		case 'access':
			$authController = new AuthController();

			$email = strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);
			$authController->login($email, $password);
		break;
	}
}


Class AuthController{
	public function login($email, $password){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login?user',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => array(,),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}
}
?>