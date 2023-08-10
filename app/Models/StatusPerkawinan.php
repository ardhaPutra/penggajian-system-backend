<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPerkawinan extends Model
{
    use HasFactory;

    protected $table = 'tabel_status_perkawinan';

    protected $fillable = [
        'nama',
    ];
}