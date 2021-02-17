<?php
namespace App;



use App\Exceptions\CurlExceptions;
use App\Exceptions\HTTPExceptions;
use App\Exceptions\UnauthorizedHTTPException;

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
			'date'        => new \DateTime()
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
		$curl = curl_init (
			"http://api.openweathermap.org/data/2.5/{$endPoint}&APPID={$this->apiKey}&units=metric&lang=fr" );
		curl_setopt_array ( $curl,
			[
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_CAINFO         => dirname ( __DIR__ ) . DIRECTORY_SEPARATOR . "cert.cer",
				CURLOPT_TIMEOUT_MS     => 1000
			]
		);
		$data = curl_exec ( $curl );

		if ( $data === false ) {
			curl_close ( $curl );
			throw new CurlExceptions( $curl );
		}
		if ( curl_getinfo ( $curl, CURLINFO_HTTP_CODE ) !== 200 ) {
			throw new CurlExceptions( $curl );
		}
		$code = curl_getinfo ( $curl, CURLINFO_HTTP_CODE );
		if ( $code === !200 ) {
			curl_close ( $curl );
			if ( $code === 401 ) {
				$data = json_decode ( $data, true );
				throw new UnauthorizedHTTPException( $data['message'], 401 );
			}
			throw new HTTPExceptions( $data, $code );
		}
		curl_close ( $curl );
		return json_decode($data, true);
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
				'date'        => new \DateTime( '@' . $day['dt'] )
			];
		}

		return $results;
	}
}