<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    //
    protected $guarded = [
        'id'    
    ];
    
    public function category()
    {
        return $this->hasOne('App\Category', 'category_id', 'category_id');
    }
    
    public function getData($category_id=null)
    {
        $query = DB::table($this->table);
        if($category_id != null) $query->where('category_id',$category_id);
        $data = $query->get();
        
        return $data;
    }
    
    public function getFish()
    {
        $query = DB::table($this->table);
        $query->where('category_id',1);
        $result = $query->paginate(6);
        
        return $result;
    }
}
