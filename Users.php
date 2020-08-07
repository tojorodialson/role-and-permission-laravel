<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\HasPermissionsTrait;

class Users extends Authenticatable {

    use Notifiable, HasPermissionsTrait;

    protected $table = 'users';
    
    protected $fillable = ['username', 'email', 'password', 'created_at', 'updated_at'];

    protected $hidden = ['password', 'code', 'remember_token', 'token'];

    public $incrementing = false;
}
