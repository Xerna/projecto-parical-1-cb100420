<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Exception;

class WeatherController extends Controller
{
    public function showWeather()
    {
        $client = new Client();
        $apiKey = env('WEATHERSTACK_API_KEY');
        $location = 'San Salvador';

        try {
            $response = $client->get("http://api.weatherstack.com/current?access_key={$apiKey}&query={$location}");
            $data = json_decode($response->getBody(), true);

            if (isset($data['error'])) {
                return view('weather')->with('error', 'No se pudo obtener la información del clima. Inténtalo de nuevo más tarde.');
            }

            return view('weather')->with([
                'weather' => $data['current'],
                'location' => $data['location']['name']
            ]);
        } catch (Exception $e) {
            return view('weather')->with('error', 'Error al conectar con el servicio de clima. Verifica tu conexión e intenta nuevamente.');
        }
    }
}
