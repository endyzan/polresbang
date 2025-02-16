<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skcksarana extends Model
{
    use HasFactory;
    protected $table = 'skcksarana';
    protected $fillable = ['foto_skcksarana'];
}
