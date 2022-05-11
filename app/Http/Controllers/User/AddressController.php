<?php

namespace App\Http\Controllers\User;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Models\Address;

class AddressController extends Controller
{
    public static function getAllProvinces()
    {
        $client = new Client();
        $response = $client->request('GET' ,'https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY'),
            ],
        ]);

        $province = json_decode($response->getbody())->rajaongkir->results;

        return $province;
    }

    public static function getProvinceName($province_id)
    {
        $province = self::getAllProvinces();

        for ($i = 0; $i < count($province); $i++) {
            if($province[$i]->province_id == $province_id) {
                return strtoupper($province[$i]->province);
            }
        }
    }

    public static function getCityByProvince(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET' ,'https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY'),
            ],
            'query' => [
                'province' => $request->province,
            ],
        ]);

        $city = json_decode($response->getbody())->rajaongkir->results;

        return $city;
    }

    public static function getCityName($province_id, $city_id)
    {
        $client = new Client();
        $response = $client->request('GET' ,'https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => env('RAJAONGKIR_API_KEY'),
            ],
            'query' => [
                'province' => $province_id,
            ],
        ]);

        $city = json_decode($response->getbody())->rajaongkir->results;

        for($i = 0; $i < count($city); $i++) {
            if($city[$i]->city_id == $city_id) {
                return strtoupper($city[$i]->city_name);
            }
        }
    }
    
    public function index()
    {
        $cart = CartController::userCart();

        $addresses = Address::where('user_id', auth()->user()->id)->get();
        $provinces = self::getAllProvinces();

        return view('user.detail.address', compact('cart', 'addresses', 'provinces'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'province' => 'required',
            'city' => 'required',
            'postal' => 'required',
            'detail' => 'required',
        ]);

        $user_id = auth()->user()->id;
        $user_id = substr($user_id, -4);
        $lastnumber = Address::where('id', 'LIKE','%'.'AD'.$user_id.'%')->orderBy('id', 'desc')->first();
        if ($lastnumber) {
            $lastnumber = $lastnumber->id;
            $lastnumber = substr($lastnumber, -3);
            $lastnumber = (int)$lastnumber;
            $lastnumber++;
            $lastnumber = str_pad($lastnumber, 3, '0', STR_PAD_LEFT);
        } else {
            $lastnumber = '001';
        }

        $id = 'AD'.$user_id.$lastnumber;

        $address = new Address();
        $address->id = $id;
        $address->user_id = auth()->user()->id;
        $address->name = $request->name;
        $address->phone = $request->phone;
        $address->province = $request->province;
        $address->city = $request->city;
        $address->postal = $request->postal;
        $address->address = $request->detail;
        $address->save();

        return redirect()->back()->with('success', 'Alamat berhasil ditambahkan');
    }
}
