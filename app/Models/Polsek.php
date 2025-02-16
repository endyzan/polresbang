<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polsek extends Model
{
    use HasFactory;

    protected $table = 'polseks'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['nama_polsek', 'foto_kapolsek', 'deskripsi_kapolsek', 'foto_bangunan'];
}

