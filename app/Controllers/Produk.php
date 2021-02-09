<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function index()
    {

        $produkModel = new ProdukModel();
        $data = [
            'title' => 'Produk | Universal Farm Indo'
        ];
        $data2 = [
            'produk' => $produkModel->findAll()
        ];
        echo view('layout/header', $data);
        echo view('produk/index', $data2);
        echo view('layout/footer');
    }


    //--------------------------------------------------------------------

}
