<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (isset($_GET["tahun"])) {
            $tahun = $_GET["tahun"];
            $transaksi = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/transaksi?tahun=" . $tahun), true);
            $menu = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/menu"), true);
            $test = "2022-02-20";
            $res = (int)(date("m", strtotime($test)));

            return view(
                'tabel',
                [
                    "transaksi" => $transaksi,
                    "tahun" => $tahun,
                    "menu" => $menu
                ]
            );
        } else {
            return view('index');
        }
    }
}
