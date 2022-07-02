<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Transaksi extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new TransaksiModel();
        $data = $model->findAll();

        return $this->respond($data, 200);
    }

    public function show($id = null)
    {
        $query = "SELECT * FROM transaksi WHERE YEAR(transaksi.tanggal) = " . $id;
        $db      = \Config\Database::connect();
        $builder = $db->query($query);
        $result = $builder->getResult();

        if ($result) {
            return $this->respond($result);
        } else {
            return $this->failNotFound('Data Tidak Ditemukan !');
        }
    }
}
