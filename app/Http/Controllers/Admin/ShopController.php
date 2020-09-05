<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    //
    function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }
    
    public function index()
    {
        $products = Product::Paginate(6);
        // $md = new Category();
        // $data = $md->getData($category_id);
        // $query = Product::query();
        // $query->where('category_id',$request->category_id);
        // $category = $query->get();
        // $category = Product::all();
        // if($request = $category->category_id){
            
        // }
        
        return view('shop',compact('products'));
    }
    public function fish()
    {
        $query = Product::query();
        $products = $query->where('category_id',1)->paginate(6);
        return view('fish',compact('products'));
    }
    
    public function articles()
    {
        $query = Product::query();
        $products = $query->where('category_id',2)->paginate(6);
        
        return view('articles', compact('products'));
    }
    public function layouts()
    {
        $query = Product::query();
        $products = $query->where('category_id',3)->paginate(6);
        
        return view('articles', compact('products'));
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
    
    public function category()
    {
        $categories = Category::all();
        return view('top',compact('categories'));
    }
    
}
