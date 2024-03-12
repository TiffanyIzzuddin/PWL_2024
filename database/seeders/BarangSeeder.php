<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => '10001', 'barang_nama' => 'Tempe', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => '10002', 'barang_nama' => 'Ayam Goreng', 'harga_beli' => 7000, 'harga_jual' => 10000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => '20001', 'barang_nama' => 'Blazer', 'harga_beli' => 40000, 'harga_jual' => 70000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => '20002', 'barang_nama' => 'Kemeja', 'harga_beli' => 30000, 'harga_jual' => 50000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => '30001', 'barang_nama' => 'Handphone Xiaomi', 'harga_beli' => 25000000, 'harga_jual' => 3500000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => '30002', 'barang_nama' => 'Laptop Infinix', 'harga_beli' => 7000000, 'harga_jual' => 8000000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => '40001', 'barang_nama' => 'Panci', 'harga_beli' => 20000, 'harga_jual' => 50000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => '40002', 'barang_nama' => 'Wajan', 'harga_beli' => 20000, 'harga_jual' => 50000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => '50001', 'barang_nama' => 'Meja Lipat', 'harga_beli' => 130000, 'harga_jual' => 150000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => '50002', 'barang_nama' => 'Lemari Plastik', 'harga_beli' => 200000, 'harga_jual' => 250000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
