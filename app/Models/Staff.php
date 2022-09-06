<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'email',
        'role_as',
    ];
}
