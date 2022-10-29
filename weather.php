<?php
include 'wjson.php';
 
get_weather_info();
exit(0);
 
function get_weather_info()
{
  $service_key = 'sTBjIlkgX411KQPYQrsPDzGgpETiIW6y0k4x%2FqNbnJtwEnkDniZhNirfUM5hz8wO2xFK31cHSsGwYZEs3pQrRw%3D%3D';
  $service_url = 'http://newsky2.kma.go.kr/service/SecndSrtpdFrcstInfoService2/';
  $service_api_name = 'ForecastGrib';
  $service_full_url = $service_url . $service_api_name . '?';
  $service_full_url = $service_full_url . ('ServiceKey=' . $service_key);
  $service_full_url = $service_full_url . ('&base_date=' . '20220117');
  $service_full_url = $service_full_url . ('&base_time=' . '1200');
  $service_full_url = $service_full_url . ('&nx=' . '61');
  $service_full_url = $service_full_url . ('&ny=' . '120');
  //$service_full_url = $service_full_url . ('&pageNo=' . '1');
  //$service_full_url = $service_full_url . ('&numOfRows=' . '10');
 
  $ch = curl_init();
 
  curl_setopt($ch, CURLOPT_URL, $service_full_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  $response = curl_exec($ch);
 
  $errno = curl_errno($ch);
  if ($errno > 0) {
    if ($errno === 28) {
        echo "Connection timed out.";
    }
    else {
        echo "Error #" . $errno . ": " . curl_error($ch);
    }
 
    exit(0);
  }
 
  if (!$response) {
    echo "ERROR - 1";
    exit(0);
  }
 
  $json_list = XmlToJson::Parse($response);
 
  if (!$json_list) {
    echo "ERROR - 2";
    exit(0);
  }
 
  $json_list= json_decode($json_list, true);
  curl_close($ch);
 
  if (!$json_list) {
    echo "ERROR - 3";
    exit(0);
  }
 
  if(strcmp($json_list['header']['resultMsg'],'OK') == 0 ) {
    var_dump($json_list);
    return 0; //success
  }
 
  var_dump($json_list);
  return 1; //failed
}
?>