<?php

$curl = curl_init("http://api.openweathermap.org/data/2.5/weather?q=London&units=metric&lang=fr&appid=f622ed199e4410f6d19723a6567445ac");
$data = curl_exec($curl);
curl_setopt($curl, CURLOPT_CAINFO,__DIR__.DIRECTORY_SEPARATOR.'cert.cer');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
curl_getinfo($curl, CURLINFO_HTTP_CODE);
$data = curl_exec($curl);
if ($data === false) {
	
}else{
	if(curl_getinfo($curl, CURLINFO_HTTP_CODE)===200){
	$data = json_decode($data,true);
	echo '<pre>';
	var_dump($data);
	var_dump($data['main']['temp']);
	echo '</pre>';
	}else{
	echo "Error Server !";
	}
}
curl_close($curl);
?>