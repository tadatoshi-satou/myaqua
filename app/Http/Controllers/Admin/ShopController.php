<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;

class ShopController extends Controller
{
    //
    public function index()
    {
        $products = Product::Paginate(6);
        return view('shop',compact('products'));
    }
    
     public function myCart(Cart $cart)
   {
        $data = $cart->showCart();
       return view('mycart',$data);
       
   }
   
    public function addMycart(Request $request,Cart $cart)
    {
       $product_id=$request->product_id;
       $message = $cart->addCart($product_id);
       
       $data = $cart->showCart();

       return view('mycart',$data)->with('message',$message);

    }
    
    public function deleteCart(Request $request,Cart $cart)
    {
        $product_id = $request->product_id;
        $message = $cart->deleteCart($product_id);
        
        $data = $cart->showCart();
        
        return view('mycart',$data)->with('message',$message);
    }
    
    public function checkout(Cart $cart)
    {
        $checkout_info = $cart->checkoutCart();
        return view('checkout');
    }
}
