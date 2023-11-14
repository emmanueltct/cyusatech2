<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class Partners extends Model
{

    
    protected $fillable=[
        'partners_name',
        'partners_logo',
        'status'
    ];
    use HasFactory, Uuid;
   
    public $incrementing = false;

    protected $keyType = 'uuid';
}
