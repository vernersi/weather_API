<?php
require_once "vendor/autoload.php";
use App\WeatherRequest;

while(true) {
    $cityName = (string)readline("I`m the weather bot! Choose City :");
    $request = new WeatherRequest($cityName);
    $info = $request->getWeatherData();
    echo "Currently in ".$cityName.PHP_EOL.
    "Temperature : ".$request->getWeatherData()->getTemperature()." deg in celsius;".PHP_EOL.
    "Humidity is : ".$request->getWeatherData()->getHumidity()." %;".PHP_EOL.
    "Wind speed is : ".$request->getWeatherData()->getWindSpeed()." m/s;".PHP_EOL.
    "Wind direction is : ".$request->getWeatherData()->getWindDir()." deg".PHP_EOL;
}