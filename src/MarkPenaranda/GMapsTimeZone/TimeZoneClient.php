<?php 
namespace MarkPenaranda\GMapsTimeZone;

class TimeZoneClient 
{

	public static function getTimeZoneByCoordinates($long, $lat, $googleMapApiKey)
	{
		$url = "https://maps.googleapis.com/maps/api/timezone/json?location=". $lat .",". $long ."&timestamp=" . $time() ."&key=" . $apiKey;

		$curl = curl_init();
		
		$action_url = $url;



		curl_setopt_array($curl, array(
			    CURLOPT_RETURNTRANSFER => 1,
			    CURLOPT_URL => $url
			));
		$resp = curl_exec($curl);


       $result = json_decode($resp, true);

		return $result;		
	
	}

}