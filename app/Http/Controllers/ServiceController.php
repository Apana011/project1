<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    public function index(){
        $datas=Service::all();
       return view ('main',['datas'=>$datas]);
    }

    
}

