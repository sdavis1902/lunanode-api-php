<?php
namespace sdavis1902\LunanodeApiPhp;

class Lunanode {

	protected static $LNDYNAMIC_URL = 'https://dynamic.lunanode.com/api/{CATEGORY}/{ACTION}/';

	public function __construct(){
		$api_id = env('LND_API_ID');
		$api_key = env('LND_API_KEY');

		if(strlen($api_id) != 16) {
			throw new \Exception('supplied api_id incorrect length, must be 16');
		}

		if(strlen($api_key) != 128) {
			throw new \Exception('supplied api_key incorrect length, must be 128');
		}

		$this->api_id = $api_id;
		$this->api_key = $api_key;
		$this->partial_api_key = substr($api_key, 0, 64);
	}

	public function request($category, $action, $params = []) {
		$url = str_replace(['{CATEGORY}', '{ACTION}'], [$category, $action], self::$LNDYNAMIC_URL);
		$request_array = $params;
		$request_array['api_id'] = $this->api_id;
		$request_array['api_partialkey'] = $this->partial_api_key;
		$request_raw = json_encode($request_array);
		$nonce = time();
		$handler = "$category/$action/";
		$signature = hash_hmac('sha512', $handler . '|' . $request_raw . '|' . $nonce, $this->api_key);

		$data = [
			'req' => $request_raw,
			'signature' => $signature,
			'nonce' => $nonce
		];

		$options = [
			'http' => [
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($data),
			]
		];
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		return json_decode($result, true);
	}
}
