<!DOCTYPE html>
<html>
<head>
    <title>Weather Information</title>
</head>
<body>
    <h1>Current Weather in {{ $weatherData['name'] }}</h1>
    @if (isset($weatherData['weather'][0]['icon']))
            <img src="http://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}.png" alt="Weather Icon">
        @endif
    <p>Description: {{ $weatherData['weather'][0]['description'] }}</p>
    <p>Temperature: {{ $weatherData['main']['temp'] }} &#8451;</p>
    <p>Wind speed: {{ $weatherData['wind']['speed'] }} </p>

</body>
</html>