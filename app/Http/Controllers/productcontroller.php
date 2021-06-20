<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    //
    public function index(){

        
        $data = product::all();
        return view('product',["data"=>$data]);
    }

    public function detail($id){

        $data = product::find($id);
        return view('detail',['pro'=>$data]);
    }

    public function search(Request $req){
        $data = product::
        where('name', 'like', '%' . $req->input('query').'%')
        ->get();

        return view('search',['pro'=>$data]);
    }
}
