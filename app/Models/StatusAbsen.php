<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAbsen extends Model
{
    use HasFactory;

    protected $table = 'tabel_status_absen';

    protected $fillable = [
        'nama',
        'deleted_at',
    ];
}
