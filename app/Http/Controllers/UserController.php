<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r){
        $id = $r->id;

        $user = User::find($id);

        return $user;
    }

    public function insert(Request $r){
      $rawdata = $r->only(['name', 'email', 'password']);

      $user = User::create($rawdata);


      return $user;

    }
}
