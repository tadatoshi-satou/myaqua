@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <div class="">
               <div class="d-flex flex-row flex-wrap">
                   
                   @foreach($products as $product)
                      <div class="col-xs-6 col-sm-4 col-md-4 ">
                               <div class="mycart_box">
                                   {{$product->name}} <br>
                                   {{$product->fee}}円<br>
                                   <img src="/image/{{$product->imgpath}}" alt="" class="incart" >
                                   <br>
                                   {{$product->detail}} <br>

                                   <form action="mycart" method="post">
                                       @csrf
                                       <input type="hidden" name="product_id" value="{{ $product->id }}">
                                       <input type="submit" value="カートに入れる">
                                   </form>
                               </div>

                               <a class="text-center" href="/">商品一覧へ</a>
 
                           </div>
                    @endforeach
                    <div class="text-center" style="width: 200px;margin: 20px auto;">
                    {{$products->links()}} 
               </div>
           </div>
       </div>
   </div>
</div>
@endsection