<?php

$link = 'http://api.openweathermap.org/data/2.5/weather';
$apiKey = 'e7425706bcd4490ebe5d6fef880070b0';
$city = 'Smolensk';
$units = 'metric';
$apiURL = '{$link}?q={$city}&units={$units}&appid={$apiKey}';

// $content = file_get_contents("{$link}?q={$city}&units={$units}&appid={$apiKey}");
//$content = file_get_contents("http://api.openweathermaporg./data/2.5/weather?q=Smolensk,ru&appid=e7425706bcd4490ebe5d6fef880070b0");
$content = file_get_contents("{$link}?q={$city}&units={$units}&appid={$apiKey}") or exit('Не удалось получить данные');
// $content = file_get_contents($link);

$location = 'Current weather in Smolensk';
$weather = 'Weather: ';
$current_temp = 'Current temperature, °С: ';
$temp_min ='Minimum temperature, °С: ';
$temp_max = 'Maximum temperature, °С: ';
$wind_power = 'Wind speed, m/s: ';
$humidity = 'Humidity, %: ';
$pressure = 'Pressure, mm Hg: ';
$result = json_decode($content, true) or exit('Ошибка декодирования json');
function checkData($data){
	if (empty($data)) { return 'не удалось получить данные';
}
return $data;
}

$icon = "http://openweathermap.org/img/w/".$result['weather'][0]['icon'].'.png';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	echo '<b>', mb_convert_case($location, 0), '</b>', '<br>', 

		'<img src = $icon>', '<br>',

		'<b>', $weather, '</b>',checkData($result['weather'][0]['description']), '<br>',

		'<b>', $current_temp, '</b>', checkData($result['main']['temp']), '<br>',
	
		'<b>', $temp_min, '</b>', checkData($result['main']['temp_min']), '<br',

		'<b>', $temp_max, '</b>', checkData($result['main']['temp_max']), '<br>',

		'<b>', $wind_power, '</b', checkData($result['wind']['speed']), '<br>',

		'<b>', $humidity, '</b>', checkData($result['main']['humidity']), '<br>',

		'<b>', $pressure, '</b>', checkData($result['main']['pressure']) * 0.750062, '<br>';

?>
</body>
</html>