<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Zufar', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Zhafira', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Shabrinda', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Ardi', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Ega', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Aulia', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Tiffany', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Azziz', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Indra', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Rizaldi', 'penjualan_kode' => '12345', 'penjualan_tanggal' => Carbon::now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
