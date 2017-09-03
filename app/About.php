<?php

namespace App;
use Illuminate\Support\Facades\Log;


/**
 * Description of Page
 *
 * @author aurimas
 */
class About {
	use \web_helpers;

	public static function create() {
		return new self();
	}
	
	public function __construct() {
		$this->client = new \GuzzleHttp\Client(
			['base_uri' => 'https://api.instagram.com/v1/users/' . env('INSTAGRAM_USER') . '/media/recent/']
		);
	}

	public function web_page_title($site_name = FALSE) {
		return $this->page_title($site_name, ['About']);
	}

	public function web_url() {
		return route('about');
	}

	public function web_image() {
		return url('assets/featured-logo.png');
	}

	public function web_description() {
		return 'LaikaReads publishes books that are in public domain in the United States.';
	}
	
	public function web_latest_instagram() {				
		try {
			$response = $this->client->request('GET', '', 
				['query' => 
					[
						'access_token' => env('INSTAGRAM_TOKEN'),
						'count' => '1'
					]
				]
			);
			$data = $this->parseResponse($response);	
			
		} catch (\GuzzleHttp\Exception\ClientException $g_error) {			
			Log::warning('Instagram retrieval error: ' . $g_error->getMessage());
			$data = null;					
		} 				
		return $data;
    }
	
	public function parseResponse(\GuzzleHttp\Psr7\Response $response) {
		try {
			$object = json_decode($response->getBody());
			return $object->data[0]->link;
		} catch (\ErrorException $e) {
			Log::warning('Instagram response parsing error: ' . $g_error->getMessage());
		}
	}
}
