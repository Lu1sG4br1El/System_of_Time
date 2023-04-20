<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'tbUsers';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'apPaterno', 'apMaterno', 'email', 'password'];
}
