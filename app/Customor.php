<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customor extends Model
{
    protected $table = "customer";

    public function bill()
    {
        //* id_customer : int(11)

        return $this->hasMany('App\Bill', 'id_customer', 'id');
    }
}
