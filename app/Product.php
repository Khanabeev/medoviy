<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
                    'name',
                    'type',
                    'header',
                    'content',
                    'url',
                    'title',
                    'description',
                    'keywords',
                    'image',
                    'image_position',
                    'proposal',
                    'is_available',
                    'is_published',
            ];

    public function prices() {
        return $this->hasMany('App\Price');
    }

    public function store() {
        return $this->hasOne('App\Store');
    }
}
