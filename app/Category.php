<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product', 'category_id', 'category_id');
    }
    
    // public function getDate($category_id=null)
    // {
    //     $query = DB::table($this->table);
    //     if($category_id != null) $query->where('category_id',$category_id);
    //     $data = $query->get();
        
    //     return $data;
    // }

}
