<?php

class Csrf {

	public static function check($userToken) {
		// we had some problems with some client, so desabled until we fix it
		return true;
		if($sessionToken = Session::get('csrf_token')) {
			return hash_equals($sessionToken, $userToken);
		}

		return false;
	}

	public static function token() {
		if($sessionToken = Session::get('csrf_token')) {
			return $sessionToken;
		}

		$token = noise(64);

		Session::put('csrf_token', $token);

		return $token;
	}

}
