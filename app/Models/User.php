<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'gender', 'dob', 'email'];

    //protected $hidden = ['created_at', 'updated_at'];

    protected $visible = ['name', 'gender', 'dob', 'email'];
}
