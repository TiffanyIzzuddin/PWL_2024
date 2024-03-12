<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index(){

    // tambah data user dengan Eloquent Model
    // $data = [
    //     'username' => 'customer-1',
    //     'nama' => 'Pelanggan',
    //     'password' => hash::make('12345'),
    //     'level_id' => 1
    // ];
    // UserModel::insert($data);

    // update data 
    $data = [
        'nama' => 'Pelanggan Pertama',
    ];
    UserModel::where('username','customer-1')->update($data);

    $user = UserModel::all();
    return view('user', ['data' => $user]);
   }

}
