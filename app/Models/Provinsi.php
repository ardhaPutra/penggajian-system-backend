<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'tabel_negara';

    protected $fillable = [
        'pk',
        'negarafk',
        'nm',
        'ctn',
        'dateadded',
        'addedbyfk',
        'datemodified',
        'lastuserfk'
    ];
}
