<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPekerjaanSuamiIstri extends Model
{
    use HasFactory;

    protected $table = 'status_pekerjaan_suami_istri';

    protected $fillable = [
        'nama',
    ];
}
