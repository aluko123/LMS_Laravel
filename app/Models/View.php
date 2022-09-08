<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    public $table = 'views';

    public $fillable = [
        'user_id',
        'user_account_id',
        'category_id',
        'course_id',
        'item_id'
    ];

    protected $casts = [
        
    ];

    public static $rules = [
        'user_id' => 'required',
        'user_account_id' => 'nullable',
        'category_id' => 'nullable',
        'course_id' => 'nullable',
        'item_id' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
