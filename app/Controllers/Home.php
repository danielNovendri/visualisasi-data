<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'H O M E'
		];


		echo view('template/header', $data);
		echo view('template/sidebar');
		echo view('home/index');
		echo view('template/footer');
	}
}
