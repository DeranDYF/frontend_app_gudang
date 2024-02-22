<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;

class PengajuanController extends BaseController
{
    public function index()
    {
        $this->data['title'] = 'Pengambilan Barang';
        $this->data['menu'] = 'pengambilan';
        return view('pengambilan', $this->data);
    }
    use ResponseTrait;

    public function getAllPengambilan()
    {

        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/pengambilan');
        $body = $response->getBody();
        $data = json_decode($body, true);
        return $this->respond($data);
    }
}
