<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    
    public function getProductList(array $condition = [])
    {
        // パラメータの取得
        $category_id = array_get($condition, 'category_id');
         // Eager ロードの設定を追加
        $query = $this->with('category')->orderBy('product_id', 'desc');
        // カテゴリーIDの指定
        if ($category_id) {
            $query->where('category_id', $category_id);
        }
        
        
    }
}
