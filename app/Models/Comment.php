<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';

    public $fillable = [
        'user_id',
        'course_id',
        'category_id',
        'body'
    ];

    protected $casts = [
        'body' => 'string'
    ];

    public static $rules = [
        'user_id' => 'required',
        'course_id' => 'nullable',
        'category_id' => 'nullable',
        'body' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
