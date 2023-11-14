<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class Shop extends Model
{
    protected $fillable=[
        'product',
        'model',
        'description',
        'price',
        'PriceStatus',
        'images',
        'status'
    ];
    use HasFactory;
    use Uuid;
    public $incrementing = false;
    protected $keyType = 'uuid';
}
