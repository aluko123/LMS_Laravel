<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table = 'courses';

    public $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'about_instructor',
        'discount_price',
        'actual_price',
        'playlist_url',
        'view_count',
        'subscriber_count',
        'status',
        'photo'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'about_instructor' => 'string',
        'playlist_url' => 'string',
        'photo' => 'string'
    ];

    public static $rules = [
        'user_id' => 'required',
        'category_id' => 'required',
        'title' => 'required|string',
        'description' => 'required|string',
        'about_instructor' => 'required|string',
        'discount_price' => 'required',
        'actual_price' => 'required',
        'playlist_url' => 'required|string',
        'view_count' => 'required',
        'subscriber_count' => 'required',
        'status' => 'required',
        'photo' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
