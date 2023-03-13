<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contects;
class Getdatacontroller extends Controller
{
    //
    public function store(Request $req){
        // return "vieowh";
        $conte = new Contects;
        $conte->name=$req->name;
        $conte->email=$req->email;
        $conte->mobile=$req->mobile;
        $conte->age=$req->age;
        $conte->city=$req->city;
        $conte->area=$req->area;
        $conte->save();
        return $conte;

    }
    public function show(){
        // return "hwllo viwoeio";
        $datas = Contects::all();

        return $datas;
    }
}
