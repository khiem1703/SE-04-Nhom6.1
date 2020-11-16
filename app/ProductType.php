<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    protected $table = "type_products";
    public function product(){
        // một loại sản phẩn có nhiều kiểu ngoại chính
        return $this->hasMany('App\Product','id_type','id');
        
   }

}
