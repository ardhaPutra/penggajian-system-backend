<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'tabel_pendidikan';

    protected $fillable = [
        'pk',
        'nm',
        'ctn',
        'dateadded',
        'addedbyfk',
        'datemodified',
        'lastuserfk',
        'deleted_at',
    ];
}
