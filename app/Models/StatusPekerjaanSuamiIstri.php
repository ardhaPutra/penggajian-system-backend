<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPekerjaanSuamiIstri extends Model
{
    use HasFactory;

    protected $table = 'tabel_status_pekerjaan_suami_istri';

    protected $fillable = [
        'nama',
    ];
}
