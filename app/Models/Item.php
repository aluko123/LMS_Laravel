<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'items';

    public $fillable = [
        'user_id',
        'course_id',
        'view_count',
        'url',
        'description'
    ];

    protected $casts = [
        'url' => 'string',
        'description' => 'string'
    ];

    public static $rules = [
        'user_id' => 'nullable',
        'course_id' => 'required',
        'view_count' => 'required',
        'url' => 'nullable|string',
        'description' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
