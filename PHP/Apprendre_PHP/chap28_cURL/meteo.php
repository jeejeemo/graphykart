<?php

/**curl_init() */
$curl = curl_init("https://api.openweathermap.org/data/2.5/weather?q=Perpignan&units=metric&lang=fr&appid=f622ed199e4410f6d19723a6567445ac");


curl_setopt_array($curl, [
	CURLOPT_CAINFO			=> __DIR__ . DIRECTORY_SEPARATOR . 'cert2021.cer',
	CURLOPT_RETURNTRANSFER  => true,
	CURLOPT_TIMEOUT			=> 1
]);

// curl_setopt($curl, CURLOPT_TIMEOUT, 1);
curl_getinfo($curl, CURLINFO_HTTP_CODE);

/**curl_exe() */
$data = curl_exec($curl);

/**curl_error() */
if ($data === false) {
	
} else {
	if(curl_getinfo($curl, CURLINFO_HTTP_CODE)===200){
	$data= json_decode($data,true);
	echo ucfirst($data['weather'][0]['description']);
		echo '<pre>';
		var_dump($data);
		var_dump($data['main']['temp']);
		echo '</pre>';
} else {
		echo "Error Server !";
	} 
}
/* else{
	if(curl_getinfo($curl, CURLINFO_HTTP_CODE)===200){
	$data = json_decode($data,true);
	echo '<pre>';
	var_dump($data);
	var_dump($data['main']['temp']);
	echo '</pre>';
	}else{
	
	} 
}*/
	
/**curl_close() */
curl_close($curl);
?>