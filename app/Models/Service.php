<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class Service extends Model
{
    protected $fillable = [
        'service_name',
        'description',
        'images',
    ];
    //use HasFactory;
     use Uuid;
    public $incrementing = false;
    protected $keyType = 'uuid';
}
