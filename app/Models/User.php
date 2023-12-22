<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='user';
    protected $primaryKey="id";
    // protected $fillable = ['name', 'email', 'password'];
    protected $fillable = ['name', 'email', 'password', 'image', 'created_at', 'updated_at'];


}
