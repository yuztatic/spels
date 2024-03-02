<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OfficesModel;

class OfficesController extends BaseController
{
    public function index()
    {
        return view('offices/list');
    }

    public function createOffice()
    {
        return view('offices/add');
    }

    public function storeOffice()
    {
        $insertOffice= new OfficesModel();
        $data=array(
            'code' => $this->request->getPost('code'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),

        );
        print_r($data);
        $insertOffice->insert($data);

       return redirect()->to('/offices_index')->with('success', 'Office Added Successfully');

    }

    public function editOffice($id){

        return view('offices/edit');
    }


    public function updateOffice(){


    }

    public function deleteOffice(){


    }
}
