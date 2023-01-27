<?php 

// This example makes a GET request to the Google Maps Geocoding API to retrieve the latitude and longitude for a given address. You'll need to replace YOUR_API_KEY with a valid API key and the $address variable with the address you want to geocode. 
// The response is in json format and it can be processed as you wish.
// Please make sure you have enabled the google maps api in your google console
// set the API endpoint and parameters
$maps_api_endpoint = "https://maps.googleapis.com/maps/api/geocode/json";
$address = "1600 Amphitheatre Parkway, Mountain View, CA";
$api_key = "YOUR_API_KEY";

// make the API call
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $maps_api_endpoint . "?address=" . urlencode($address) . "&key=" . $api_key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);

// decode the JSON response
$json_response = json_decode($response, true);

// access the response data
$latitude = $json_response["results"][0]["geometry"]["location"]["lat"];
$longitude = $json_response["results"][0]["geometry"]["location"]["lng"];

echo "Latitude: " . $latitude . "<br>";
echo "Longitude: " . $longitude;
