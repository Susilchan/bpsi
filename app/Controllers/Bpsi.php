<?php

namespace App\Controllers;

use App\Models\Bpsi as Modelsbpsi;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ApiModel;


date_default_timezone_set("Asia/Jakarta");


class Bpsi extends ResourceController
{

    public function index()
    {
        $bpsi = new Modelsbpsi();
        $data = $bpsi->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }



    // create
    public function create()
    {
        $bpsi = new Modelsbpsi();
        //   $key = $this->request->getVar("key");


        $data = [
            'ph' => $this->request->getVar('ph'),
            'tds' => $this->request->getVar('tds'),
            'suhu' => $this->request->getVar('suhu'),
            'kualitas_limbah'  => $this->request->getVar('kualitas_limbah'),
        ];

        $bpsi->insert($data);

        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Logdata has been added'
            ]
        ];
        return $this->respondCreated($response);
    }

    // single
    public function getLogdata($id = null)
    {
        $bpsi = new Modelsbpsi();
        $data = $bpsi->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('logdata does not exist.');
        }
    }

    // delete
    public function delete($id = null)
    {

        $bpsi = new Modelsbpsi();
        $data = $bpsi->find($id); // Cari data berdasarkan ID


        if ($data) {
            $bpsi->delete($id); // Hapus data

            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'logdata deleted'
                ]
            ];

            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('logdata does not exist.');
        }
    }

    public function halaman_tabel(): string
    {
        $bpsi = new Modelsbpsi();
        $fdate = $this->request->getVar('tanggal_mulai');
        if ($fdate == null) {
            $data = $bpsi->orderBy('id', 'DESC')->findAll();
        } else {
            $data = $bpsi->where('tanggal', $fdate)->find();
        }
        $ldate = $this->request->getVar('tanggal_akhir');
        $filterByDate = $bpsi->where('tanggal', $fdate)->find();
        // dd($filterByDate);
        // return $this->respond($data);

        return view('pages/tables/basic-table', ['data' => $data]);
    }
    public function search(): string
    {
        $bpsi = new Modelsbpsi();
        $fdate = $this->request->getVar('tanggal_mulai');
        $ldate = $this->request->getVar('tanggal_akhir');
        $filterByDate = $bpsi->where('tanggal', $fdate)->find();
        // dd($filterByDate);
        $data = $bpsi->orderBy('id', 'DESC')->findAll();
        // return $this->respond($data);

        return view('pages/tables/basic-table', ['data' => $data]);
    }
    public function halaman_charts_ph()
    {

        $bpsi = new ModelsBpsi();
        $data = $bpsi->orderBy('id', 'desc')->limit(7)->find();
        // $pagi = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '04')->where('DATE_FORMAT(waktu, "%H") <', '11')->limit(7)->findAll();
        $siang = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '11')->where('DATE_FORMAT(waktu, "%H") <', '15')->limit(7)->findAll();
        // $sore = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '15')->where('DATE_FORMAT(waktu, "%H") <', '18')->limit(7)->findAll();
        // dd($pagi, $siang, $sore, $data);
        // dd($data);
        $data = [
            'data' => $data,
            'siang' => $siang,
        ];

        return view('pages/charts/chartjs_ph', $data);
    }

    public function halaman_charts_tds()
    {

        $bpsi = new ModelsBpsi();
        $data = $bpsi->orderBy('id', 'desc')->limit(7)->find();
        // $pagi = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '04')->where('DATE_FORMAT(waktu, "%H") <', '11')->limit(7)->findAll();
        $siang = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '11')->where('DATE_FORMAT(waktu, "%H") <', '15')->limit(7)->findAll();
        // $sore = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '15')->where('DATE_FORMAT(waktu, "%H") <', '18')->limit(7)->findAll();
        // dd($pagi, $siang, $sore, $data);
        // dd($data);
        $data = [
            'data' => $data,
            'siang' => $siang,
        ];

        return view('pages/charts/chartjs_tds', $data);
    }

    public function halaman_charts_suhu()
    {

        $bpsi = new ModelsBpsi();
        $data = $bpsi->orderBy('id', 'desc')->limit(7)->find();
        // $pagi = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '04')->where('DATE_FORMAT(waktu, "%H") <', '11')->limit(7)->findAll();
        $siang = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '11')->where('DATE_FORMAT(waktu, "%H") <', '15')->limit(7)->findAll();
        // $sore = $bpsi->where('DATE_FORMAT(waktu, "%H") >=', '15')->where('DATE_FORMAT(waktu, "%H") <', '18')->limit(7)->findAll();
        // dd($pagi, $siang, $sore, $data);
        // dd($data);
        $data = [
            'data' => $data,
            'siang' => $siang,
        ];

        return view('pages/charts/chartjs_suhu', $data);
    }
}
