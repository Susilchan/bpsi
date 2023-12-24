<?php

namespace App\Controllers;

use App\Models\Bpsi;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        // echo "welcome ".$session->get('username');
        $bpsi = new Bpsi();
        $latestUsers = $bpsi->orderBy('waktu', 'desc')->limit(0)->first();

        // var_dump($latestUsers);

        // d($camera);
        $data = [
            'data' => $latestUsers,
            'session' => $session->get('username'),
        ];

        return view('pages/samples/dashboard', $data);
        // return view('index', ['data' => $latestUsers,]);
    }
    // chartjs
    public function halaman_charts(): string
    {
        return view('pages/charts/chartjs');
    }
    // table
    public function halaman_tabel(): string
    {
        return view('pages/tables/basic-table');
    }
    public function export(): string
    {
        $bpsi = new Bpsi();
        $data = $bpsi->orderBy('id', 'DESC')->findAll();

        return view('pages/tables/export.php', ['data' => $data]);
    }
    public function print(): string
    {
        $bpsi = new Bpsi();
        $data = $bpsi->orderBy('id', 'DESC')->findAll();

        return view('pages/tables/print.php', ['data' => $data]);
    }
    public function halaman_login(): string
    {
        return view('login');
    }
}
