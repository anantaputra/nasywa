<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Address;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    private $origin = '196';

    public function jneCost($city_id, $weight)
    {
        $client = new Client();
        $response = $client->request('POST' ,'https://api.rajaongkir.com/starter/cost', [
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY'),
            ],
            'form_params' => [
                'origin' => $this->origin,
                'destination' => $city_id,
                'weight' => $weight,
                'courier' => 'jne',
            ],
        ]);

        $cost = json_decode($response->getbody())->rajaongkir->results;

        return $cost;
    }

    public function tikiCost($city_id, $weight)
    {
        $client = new Client();
        $response = $client->request('POST' ,'https://api.rajaongkir.com/starter/cost', [
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY'),
            ],
            'form_params' => [
                'origin' => $this->origin,
                'destination' => $city_id,
                'weight' => $weight,
                'courier' => 'tiki',
            ],
        ]);

        $cost = json_decode($response->getbody())->rajaongkir->results;

        return $cost;
    }

    public function posCost($city_id, $weight)
    {
        $client = new Client();
        $response = $client->request('POST', 'https://api.rajaongkir.com/starter/cost', [
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY'),
            ],
            'form_params' => [
                'origin' => $this->origin,
                'destination' => $city_id,
                'weight' => $weight,
                'courier' => 'pos',
            ],
        ]);

        $cost = json_decode($response->getbody())->rajaongkir->results;

        return $cost;
    }

    public function index()
    {
        $items = CartController::cartItems();

        $address = Address::where('user_id', auth()->user()->id)
                    ->where('utama', true)
                    ->get();

        $weight = $items[0]->productnya->detailnya[0]->weight;

        $jne = self::jneCost($address[0]->city, $weight);

        $jne = $jne[0]->costs;

        $tiki = self::tikiCost($address[0]->city, $weight);

        $tiki = $tiki[0]->costs;

        $pos = self::posCost($address[0]->city, $weight);

        $pos = $pos[0]->costs;

        return view('user.checkout', compact('items', 'address', 'jne', 'tiki', 'pos'));
    }
}
