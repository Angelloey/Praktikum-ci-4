<?php

namespace App\Controllers;


class DeviceDetailController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Barang'
        ];

        return view('barang/index', $data);
    }
    public function barang1()
    {
        $data =[
            'title' => 'Arduino'
        ];
        return view('barang/barang1', $data);
    }
    public function barang2()
    {
        $data =[
            'title' => 'Arduino'
        ];
        return view('barang/barang2', $data);
    }
    public function barang3()
    {
        $data =[
            'title' => 'Arduino'
        ];
        return view('barang/barang3', $data);
    }
    public function barang4()
    {
        $data =[
            'title' => 'Arduino'
        ];
        return view('barang/barang4', $data);
    }
}