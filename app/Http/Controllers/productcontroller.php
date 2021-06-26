<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;

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

    public function addCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('login');
        }
    }


    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return cart::where('user_id', $userId)->count();
    }
}
