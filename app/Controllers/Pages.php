<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Global Fruit Indo'
		];
		echo view('layout/header', $data);
		echo view('layout/slider');
		echo view('pages/home');
		echo view('layout/footer');
	}
	public function produk()
	{
		$data = [
			'title' => 'Produk | Global Fruit Indo'
		];
		echo view('layout/header', $data);
		echo view('pages/produk');
		echo view('layout/footer');
	}


	//--------------------------------------------------------------------

}
