<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuatri extends Model
{
    use HasFactory;
    protected $table = 'tbcuatri';
    protected $primaryKey = 'idcuatri';
    protected $fillable = ['cuatri'];
}
