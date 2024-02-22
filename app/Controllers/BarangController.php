<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;

class BarangController extends BaseController
{
    public function index(): string
    {
        $this->data['title'] = 'Stok Barang';
        $this->data['menu'] = 'barang';
        return view('barang', $this->data);
    }

    use ResponseTrait;

    public function getAllBarang()
    {

        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/barang');
        $body = $response->getBody();
        $data = json_decode($body, true);
        return $this->respond($data);
    }

    public function index_masuk(): string
    {
        $this->data['title'] = 'Form Masuk';
        $this->data['menu'] = 'masuk';
        return view('form-masuk', $this->data);
    }

    public function getAllMasuk()
    {

        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/form-masuk');
        $body = $response->getBody();
        $data = json_decode($body, true);
        return $this->respond($data);
    }

    public function index_keluar(): string
    {
        $this->data['title'] = 'Form Keluar';
        $this->data['menu'] = 'keluar';
        return view('form-keluar', $this->data);
    }

    public function getAllKeluar()
    {

        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/form-keluar');
        $body = $response->getBody();
        $data = json_decode($body, true);
        return $this->respond($data);
    }
}
