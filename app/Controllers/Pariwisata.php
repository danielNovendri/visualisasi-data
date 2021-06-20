<?php

namespace App\Controllers;


class Pariwisata extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'PARIWISATA'
        ];


        echo view('template/header', $data);
        echo view('template/sidebar');
        echo view('home/index3');
        echo view('template/footer');
    }
}
