<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    const STATUS_IS_NEW = 1;
    const STATUS_IN_PROGRESS = 2;
    const STATUS_DONE = 3;
    const STATUS_REJECTED = 4;
    const STATUS_DELETED = 5;

    const STATUSES = [
        self::STATUS_IS_NEW => 'Новый',
        self::STATUS_IN_PROGRESS => 'В обработке',
        self::STATUS_DONE => 'Отправлен',
        self::STATUS_REJECTED => 'Отменен',
        self::STATUS_DELETED => 'Удален',
    ];
    const STATUS_COLOR = [
        self::STATUS_IS_NEW => 'dark',
        self::STATUS_IN_PROGRESS => 'warning',
        self::STATUS_DONE => 'success',
        self::STATUS_REJECTED => 'danger',
        self::STATUS_DELETED => 'info',
    ];

    protected $fillable = ['name','phone','city','order','status','comment'];
}
