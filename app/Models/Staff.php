<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class Staff extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'position',
        'telephone',
        'user_profile',
        'status'

    ];

    use HasFactory;
    use Uuid;
    public $incrementing = false;
    protected $keyType = 'uuid';
}
