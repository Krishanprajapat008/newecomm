<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;

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

    function cartList()

    {
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

            return view('cartList',['ppp'=>$products]);
    }

    function remove($id)
    {
        cart::destroy($id);
        return redirect('cartList');
    }



    function order()

    {
            $userId = Session::get('user')['id'];
            $total = $products= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->sum('products.price');

            return view('ordernow',['total'=>$products]);
    }
}
