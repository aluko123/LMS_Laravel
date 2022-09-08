<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    public $table = 'users';

    public $fillable = [
        'name',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'is_subscribed',
        'email_verified_at',
        'password',
        'view_count',
        'remember_token'
    ];

    protected $casts = [
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'date_of_birth' => 'date',
        'email' => 'string',
        'is_subscribed' => 'boolean',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'first_name' => 'nullable|string',
        'last_name' => 'nullable|string',
        'gender' => 'nullable|string',
        'date_of_birth' => 'nullable',
        'email' => 'required|string',
        'is_subscribed' => 'nullable|boolean',
        'email_verified_at' => 'nullable',
        'password' => 'required|string',
        'view_count' => 'required',
        'remember_token' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
