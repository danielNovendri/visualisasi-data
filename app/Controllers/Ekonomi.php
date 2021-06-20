<?php

namespace App\Controllers;


class Ekonomi extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'EKONOMI'
        ];


        echo view('template/header', $data);
        echo view('template/sidebar');
        echo view('home/index1');
        echo view('template/footer');
    }
}
