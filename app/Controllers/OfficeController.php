<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\Response;

class OfficeController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return ResponseInterface
     */
    public function index()
    {
        return view('pages/offices.php');
    }

    /**
     * Return the properties of a resource object
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $officeModel= new \App\Models\Office();
        $data=$officeModel->find($id);

        if(!$data){
                $response= array(
                    'status'=>'error',
                    'message'=>'Office not found'
                );
                // return $this->response->setStatusCode(Response::HTTP_NOT_FOUND);
                return $this->response->setStatusCode(Response::HTTP_NOT_FOUND)->setJSON($response);

        }

        return $this->response->setStatusCode(Response::HTTP_OK)->setJSON($data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $officeModel= new \App\Models\Office();
        $data=$this->request->getPost();// eto yung lahat ng data galing sa client

        //trap
        if(!$officeModel->validate($data)){ //if not true false, meaning may error return response to user
                $response= array(
                    'status'=>'error',
                    'message'=>$officeModel->errors()
                );

                return $this->response->setStatusCode(Response::HTTP_BAD_REQUEST)->setJSON($response);
                //return agad if may error

        }
        $officeModel->insert($data);
        $response= array(
            'status'=>'success',
            'message'=>'Office created successfully'
        );

        return $this->response->setStatusCode(Response::HTTP_CREATED)->setJSON($response);
        //IF WALA ERROR SAVE NANG DATA

    }

    /**
     * Return the editable properties of a resource object
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
         
        $officeModel= new \App\Models\Office();
        $data=$this->request->getJSON();// in preparation para sa ui

       $datafind= $officeModel->find($id);
        
        if(!$officeModel->validate($data) || !$datafind){ //if not true false, meaning may error return response to user
                $response= array(
                    'status'=>'error',
                    'message'=>$officeModel->errors()
                );

                return $this->response->setStatusCode(Response::HTTP_BAD_REQUEST)->setJSON($response);
                //return agad if may error

        }
        $officeModel->update($id, $data); // parameter is id and data
        $response= array(
            'status'=>'success',
            'message'=>'Office updated successfully'
        );

        return $this->response->setStatusCode(Response::HTTP_OK)->setJSON($response); // RESPONSE 200
        //IF WALA ERROR SAVE NANG DATA

    }

    /**
     * Delete the designated resource object from the model
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $officeModel= new \App\Models\Office();
        $data=$officeModel->find($id);

        //trap
        if($data){ 
           $officeModel->delete($id);//delete if exist
            $response= array(
                    'status'=>'success',
                    'message'=>'Office deleted successfully'
                );

                return $this->response->setStatusCode(Response::HTTP_OK)->setJSON($response);


        }
        
        $response= array(
            'status'=>'error',
            'message'=>'Record Not found'
        );

        return $this->response->setStatusCode(Response::HTTP_BAD_REQUEST)->setJSON($response); // RESPONSE 200
        //IF WALA ERROR SAVE NANG DATA

    }
}
