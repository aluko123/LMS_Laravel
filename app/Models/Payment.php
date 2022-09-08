<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payments';

    public $fillable = [
        'user_id',
        'category_id',
        'course_id',
        'amount',
        'status',
        'mode_of_payment',
        'payment_processor'
    ];

    protected $casts = [
        'status' => 'string',
        'mode_of_payment' => 'string',
        'payment_processor' => 'string'
    ];

    public static $rules = [
        'user_id' => 'required',
        'category_id' => 'nullable',
        'course_id' => 'nullable',
        'amount' => 'required',
        'status' => 'required|string',
        'mode_of_payment' => 'nullable|string',
        'payment_processor' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
