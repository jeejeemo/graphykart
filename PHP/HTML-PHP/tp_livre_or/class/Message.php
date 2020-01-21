<?php


class Message {
	const LIMIT_USERNAME = 3;
	const LIMIT_HIGHT_MESSAGE = 100;
	const LIMIT_LOW_MESSAGE = 3;
	private $username;
	private $message;
	private $date;


	public function __construct(string $username,string $message, ?DateTime $date = null) {
		$this -> username = $username;
		$this -> message = $message;
		$this -> date = $date ?: new DateTime();
	}

	public static function fromJSON(string $json): Message{
		$data = json_decode($json, true);
		return new self($data['username'], $data['message'], new DateTime("@". $data['date']) );
	}

	public function isValid(): bool {
		return empty($this->getErrors());
	}

	public function getErrors(): array {
		$errors = [];
		if(strlen($this->username)<self::LIMIT_USERNAME){
			$errors['username'] = "Votre username est trop court";
		}
		if(strlen($this ->message)<self::LIMIT_LOW_MESSAGE){
			$errors['message'] = "Votre message est trop court";
		}
		if(strlen($this->message)>self::LIMIT_HIGHT_MESSAGE){
			$errors['message'] = "Votre message est trop long";
		}
		return $errors;
	}

	public function toHTML(){
		$username = htmlentities($this->username);
		$this -> date ->setTimezone(new DateTimeZone('Europe/Paris'));
		$date = $this -> date->format('d/m/Y à H:i');
		$message = nl2br(htmlentities($this->message));

		return <<<HTML
<p>
	<strong> {$username} </strong> <em>le {$date} </em> <br>
	{$message}
</p>
HTML;

	}

	public function toJson():string{

		return json_encode([
			'username' => $this ->username,
			'message' => $this -> message,
			'date' => $this->date->getTimestamp()
		]);
	}
}