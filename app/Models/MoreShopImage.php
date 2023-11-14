<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class MoreShopImage extends Model
{
    protected $fillable=['product_id','more_photos'];
    use HasFactory,Uuid;
   
    public $incrementing = false;

    protected $keyType = 'uuid';
}
