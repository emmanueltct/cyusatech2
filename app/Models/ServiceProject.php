<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class ServiceProject extends Model
{
    protected $fillable = [
        'service_id',
        'project_id',
    ];
    
    use HasFactory;
    use Uuid;
    public $incrementing = false;
    protected $keyType = 'uuid';
}
