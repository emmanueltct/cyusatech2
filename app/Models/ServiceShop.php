<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class ServiceShop extends Model
{
    use HasFactory;
    use Uuid;
    public $incrementing = false;
    protected $keyType = 'uuid';
}
