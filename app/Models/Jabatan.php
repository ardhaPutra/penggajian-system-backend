<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'tabel_jabatan';

    protected $fillable = [
        'nm',
        'tJab',
        'ctn',
        'deleted_at',
    ];

}
