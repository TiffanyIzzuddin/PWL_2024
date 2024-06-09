<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function index()
    // {
    //     $user = UserModel::find();
    //     return view('user.user', ['data' => $user]);
    // }

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
    
        // $user = UserModel::all();
        $user = UserModel::with('level')->get();
        // dd($user);
        return view('user.user', ['data' => $user]);
       }
    

    public function tambah()
    {
        return view('user.user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' =>  $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);
        // return view('user.user');
        return redirect('/user');
    }

    public function Ubah($id)
    {
        $User = UserModel::find($id);
        return view('user.user_ubah', ['data' => $User]);
    }

    public function Ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);
        $user->username =  $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
