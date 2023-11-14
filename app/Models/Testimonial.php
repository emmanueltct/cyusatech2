<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class Testimonial extends Model
{
    protected $fillable=[
       'firstname',
        'lastname',
        'project',
        'comments',
        'company_logo',
        'status'
    ];
    use HasFactory;
    use Uuid;
    public $incrementing = false;
    protected $keyType = 'uuid';
}
