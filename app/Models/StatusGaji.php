<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusGaji extends Model
{
    use HasFactory;

    protected $table = 'tabel_status_gaji';

    protected $fillable = [
        'nama',
        'deleted_at',
    ];
}
