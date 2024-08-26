<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima en Tiempo Real</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container text-center mt-5 text-white p-5 rounded-3" style="background-color: navy;--bs-bg-opacity: .5;">
        <div class="mt-3">
            @if (isset($error))
                <div class="alert alert-danger">{{ $error }}</div>
            @elseif(isset($weather))
                <div class="row pt-5">
                    @if (isset($location))
                        <h2>{{ $location }}</h2>
                    @endif
                </div>
                <div class="row">
                    <div class="col-4">
                        @php
                            $description = strtolower($weather['weather_descriptions'][0]);
                            $image = 'cloud.png';
                            if (str_contains($description, 'clear') || str_contains($description, 'sunny')) {
                                $image = 'sun.png';
                            } elseif (str_contains($description, 'rain') || str_contains($description, 'showers')) {
                                $image = 'rain.png';
                            } elseif (str_contains($description, 'wind')) {
                                $image = 'wind.png';
                            }
                        @endphp

                        <img src="{{ asset('images/' . $image) }}" alt="{{ $description }}" class="img-fluid mb-3"
                            style="max-width: 150px;">
                        <p class="fs-3">{{ $weather['weather_descriptions'][0] }}</p>
                    </div>
                    <div class="col-4 mt-5">
                        <p class="fs-2 py-3 border border-white">{{ $weather['temperature'] }}°C</p>
                    </div>
                    <div class="col-4 pt-3">

                        <p class="fs-3">Humedad: {{ $weather['humidity'] }}</p>
                        <p class="fs-3">Velocidad del viento: {{ $weather['wind_speed'] }}km/h</p>
                    </div>
                </div>
        </div>
    @else
        <p>Cargando datos del clima...</p>
        @endif

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function fetchWeather() {
            $.get('/weather', function(data) {
                $('#weather-info').html($(data).find('#weather-info').html());
            });
        }

        setInterval(fetchWeather, 60000); // Actualizar cada 60 segundos
    </script>
</body>

</html>
