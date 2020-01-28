<?php


class Text {

	private static $suffix =" €";
	const SUFFIX = " €";

//	public static function publicwhithZero($chiffre) {
//		return self::whithZero($chiffre);
//	}

	public static function whithZero($chiffre){
		if ($chiffre < 10){
			return "0".$chiffre.self::SUFFIX;
		}else{
			return $chiffre.self::SUFFIX;
		}
	}
}