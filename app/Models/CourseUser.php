<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    public $table = 'course_user';

    public $fillable = [
        'user_id',
        'course_id',
        'user_account_id',
        'paid_date',
        'expiry_date',
        'plan',
        'paid_amount',
        'status'
    ];

    protected $casts = [
        'paid_date' => 'datetime',
        'expiry_date' => 'datetime',
        'plan' => 'string',
        'status' => 'boolean'
    ];

    public static $rules = [
        'user_id' => 'required',
        'course_id' => 'required',
        'user_account_id' => 'required',
        'paid_date' => 'required',
        'expiry_date' => 'required',
        'plan' => 'nullable|string',
        'paid_amount' => 'nullable',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
