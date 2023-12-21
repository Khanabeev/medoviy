<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $table = 'navigation';
    protected $fillable = ['name','product_id','order'];

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
