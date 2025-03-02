<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satfung extends Model
{
    use HasFactory;
    protected $table = 'satfung'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['nama_satfung', 'logo_satfung', 'deskripsi_satfung', 'foto'];
}
