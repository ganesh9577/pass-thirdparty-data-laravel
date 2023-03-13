<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Contectdatacontroller extends Controller
{
    //
    public function index(request $req){
        $datas = Http::post('http://127.0.0.1:8000/api/store',[
            // $conte = new Contects;
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'age' => $req->age,
            'city' => $req->city,
            'area' => $req->area,
        ]);
        return $datas;
    }
}
