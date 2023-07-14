<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'u_fname', // Add this line
        'u_lname',
        'u_phone',
        'u_address',
        'email',
        'password',
    ];
}
