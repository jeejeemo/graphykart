<?php


class Openweather {

	private $apiKey;

	public function __construct( string $apiKey ) {
		$this->apiKey = $apiKey;
	}

	/**
	 * Récupère les informations météo du jour
	 *
	 * @param $city
	 *
	 * @return array|null
	 * @throws Exception
	 */
	public function getToday( $city ): ?array {

		$data = $this->callAPI( "weather?q={$city}" );

		return [
			'temp'        => $data['main']['temp'],
			'description' => $data['weather'][0]['description'],
			'date'        => new DateTime()
		];
	}

	/**
	 * Appelle l'API Openweather
	 *
	 * @param string $endPoint
	 *
	 * @return array|null
	 * @throws Exception
	 */
	private function callAPI( string $endPoint ): ?array {
		$curl = curl_init(
			"http://api.openweathermap.org/data/2.5/{$endPoint}&APPID={$this->apiKey}&units=metric&lang=fr&cnt=3" );
		curl_setopt_array( $curl,
			[
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_CAINFO         => dirname( __DIR__ ) . DIRECTORY_SEPARATOR . "cert.cer",
				CURLOPT_TIMEOUT_MS     => 1000
			]
		);
		$data = curl_exec( $curl );
		if ( $data === false ) {
			$error = curl_error( $curl );
			curl_close( $curl );
			throw new Exception( $error );
		}
		if ( curl_getinfo( $curl, CURLINFO_HTTP_CODE ) !== 200 ) {
			throw new Exception( $data );
		}
		curl_close( $curl );

		return json_decode( $data, true );

	}

	/**
	 * Récupére les infos meteo sur 5jrs
	 *
	 * @param string $city
	 *
	 * @return array|null
	 * @throws Exception
	 */
	public function getForecast( string $city ): ?array {

		$data    = $this->callAPI( "forecast?q={$city}" );
		$results = [];
		foreach ( $data['list'] as $day ) {
			$results[] = [
				'temp'        => $day['main']['temp'],
				'description' => $day['weather'][0]['description'],
				'date'        => new DateTime( '@' . $day['dt'] )
			];
		}

		return $results;
	}
}