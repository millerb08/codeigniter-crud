<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Helloworld extends Controller
{
    public function index()
    {
        echo 'Hello World!';
    }


    public function usuarios()
    {
        $res = array(
            "status" => 200
        );
        
        echo json_encode($res);
    }
}