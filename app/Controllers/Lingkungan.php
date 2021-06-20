<?php

namespace App\Controllers;


class Lingkungan extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'LINGKUNGAN'
        ];


        echo view('template/header', $data);
        echo view('template/sidebar');
        echo view('home/index2');
        echo view('template/footer');
    }
}
