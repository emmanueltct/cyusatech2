<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class Project extends Model
{
    protected $fillable = [
            'project_title',
            'site_name',
            'site_location',
            'project_durations',
            'starting_date',
            'ending_date',
            'description1',
            'description2',
            'sample_image',
            'more_image',
            'status'
    ];
    use HasFactory, Uuid;
   
    public $incrementing = false;

    protected $keyType = 'uuid';
}
