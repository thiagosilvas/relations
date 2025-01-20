<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function index(Request $r){
        $address =  Address::all();
        return $address;
    }

    public function findOne(Request $r){
        return Address::find($r->id);
     
    }

    public function insert(Request $r){

        $rawData = $r->only(['address']);

        $address = Address::create($rawData);

        return $address;
    }
}
