<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'Kode_jenis_barang' => '1',
            'nama' => 'tiket syurga',
            'deskripsi_detail' => 'Dunia hanya sementara,Akhirat selama lamanya .',
            'stock' => '999',
            'foto' => 'img.JFIF',
            'harga' => 'Gratis'
        ],
        [
            'Kode_jenis_barang' => '2',
            'nama' => 'Tiket Neraka',
            'deskripsi_detail' => 'hanya bagi manusia2 yang tidak taat terhadap kewajiban dan perintaha Allah.swt.',
            'stock' => '999',
            'foto' => 'img1.PNG',
            'harga' => 'Gratis. '
        ],
        [
            'Kode_jenis_barang' => '3',
            'nama' => 'Tiket umroh',
            'deskripsi_detail' => 'hanya bagi yang mampu,semoga kalian semua mampu amin.',
            'stock' => '999',
            'foto' => 'img2.JFIF',
            'harga' => 'Rp. 26.999.000'
        ]
        ]);
    }
}
