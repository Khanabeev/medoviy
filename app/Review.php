<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name', 'email', 'review', 'rating', 'status'
    ];

    protected $table = 'reviews';

    const STATUS_NEW = 'moderation';
    const STATUS_PUBLISHED = 'published';
    const STATUS_REJECTED = 'rejected';

    public static function getStatuses() {
        return [
            self::STATUS_NEW => 'На модерации',
            self::STATUS_PUBLISHED => 'Опубликован',
            self::STATUS_REJECTED => 'Отклонен'
        ];
    }
}
