<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Universal Farm Indo'
		];
		echo view('layout/header', $data);
		echo view('layout/slider');
		echo view('pages/home');
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
