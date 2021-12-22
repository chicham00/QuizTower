<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = array();
        $data['title'] = '鬼滅';
        return view('Welcome',$data);
    }
}
