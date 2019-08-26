<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inven_masuk')->insert([
            'kode_barang' => Str::random(5),
            'nama_barang' => Str::random(10),
            'harga' => random_int(5,50000),
            'jumlah_masuk' => random_int(5,100),
            'satuan' => 'dus',
            'keterangan_masuk' => 'barang masuk',
        ]);
    }
}
