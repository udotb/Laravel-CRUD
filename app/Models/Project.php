<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

//    protected $casts = [
//        'cost' => 'float'
//    ];
//
//    protected $fillable = [
//        'name',
//        'introduction',
//        'created_at',
//        'location',
//        'cost'
//    ];
}
