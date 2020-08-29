@extends('layouts.app')

@section('content')
<!--<img src="/image/aquatop.jpg" style="width: 100%; height: 500px;" >-->
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">おすすめカテゴリ</h1>
           <div class="" >
               @foreach($categories as $category)
                   <div class="category">
                       {{$category->name}}
                   </div>
                @endforeach
           </div>
       </div>
   </div>
</div>
@endsection