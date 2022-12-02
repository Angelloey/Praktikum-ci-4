<?php

namespace App\Controllers;


class DevicesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Barang'
        ];

        return view('details/fullItem', $data);
    }
}