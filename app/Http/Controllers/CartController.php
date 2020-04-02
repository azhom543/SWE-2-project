<?php

namespace App\Http\Controllers;

use App\Product;// fi hna file na2s ll product hai3ml refrence li b3din 
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Validator;
use Auth;

class CartController extends Controller
{
   
    public function index()
    {
        $cartItems=Cart::content();
        return view('cart.index',compact('cartItems'));
    }

    public function create()
    {

    }
    
    public function store(Request $request)
    {
        
    }
    
    public function show($id)
    {

    }
    
    public function edit($id)
    {
        $product=Product::find($id);
        Cart::add($id,$product->name,1,$product->price);
        return back();
    }

    public function addItem($id)
    {
        $product=Product::find($id);

        Cart::add($id,$product->name,1,$product->price,['size'=>'medium']);

        return back();
    }

    public function update(Request $request, $id)
    {

        Cart::update($id,['qty'=>$request->qty]);
        return back();
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
