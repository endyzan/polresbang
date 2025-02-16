<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spktkegiatan extends Model
{
    use HasFactory;
    protected $table = 'spktkegiatan';
    protected $fillable = ['foto_spktkegiatan'];
}
