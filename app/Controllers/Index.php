<?php

namespace App\Controllers;

class Index extends BaseController{
    public function index(){
        $data['title']='Dasboard POS';
        $data['name']='Point Of Sale';
        echo view('admin/header',$data);
        echo view('admin/index');
        echo view('admin/footer');
    }
}
