<?php

namespace App\Controllers;
use App\Models\FarmaciaModel;
class Home extends BaseController
{
    public function index(): string
    {
        
        return view('form');
    }
    public function receba()
    {
        $data = array(
            'nome' => $this->request->getVar('nome'),
            'laboratorio' => $this->request->getVar('laboratorio'),
            'quantidade'=> $this->request->getVar('quantidade'),
            'preco' => $this->request->getVar('preco')
        );
        
        //print_r($data);

        $my_model = new FarmaciaModel();
        $my_model->insert($data);

        return redirect()->to('/showForm');

        //return view('view_formulario',$data);
    }   

    public function showForm(): string
    {    $my_model = new FarmaciaModel();
        $dados['resultado'] = $my_model->findAll();
        return view ('/showForm',$dados);
    }
}
