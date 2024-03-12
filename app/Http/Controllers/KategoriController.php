<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        // Insert
        // $data = [
        //     'kategori_kode' => 'SMK',
        //     'kategori_nama' => 'Snack/Makanan ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert Data Baru Berhasil';

        // Update
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SMK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang  diupdate; ' .$row . 'baris';

        // Delete
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SMK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row . 'baris';

        // Show table
        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
