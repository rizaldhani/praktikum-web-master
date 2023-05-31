<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MakananController extends Controller
{
    public function tampil()
    {
//        $makanan = 'Bakso';
//        $minuman = 'Es Tea';
//        $makanan = [
//            ['nama' => 'Bakso', "harga" => 5000],
//
//            ['nama' => 'Mie ayam', "harga" => 5000]
//        ];

        $biodata = [
            'nama' => 'Rizal Marfadhani',
            'nim' => '21103041040',
            'kuliah'=>'Universitas Wahid Hasyim Semarang',
            'alamat' => 'Jalan Semeru Barat',
            'hobis' => ['Tidak ngapa-ngapain',],
            'cita' => 'Munggah kaji',
        ];

        return view('welcome',
            ['biodata' => $biodata
//'makanan' => $makanan,
//'minuman' => $minuman
            ]);
    }
}
