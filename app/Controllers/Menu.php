<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Menu extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new MenuModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
}
