<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPegawai extends Model
{
    use HasFactory;

    protected $table = 'tabel_status_pegawai';

    protected $fillable = [
        'nama',
        'deleted_at',
    ];
}
