<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
    protected $fillable = [
        'product_id',
        'image',
        'order'
    ];

    public function product() {
        return $this->belongsTo('App\Product','product_id');
    }
}
