<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $table = 'tabel_negara';

    protected $fillable = [
        'nm',
        'ctn',
        'dateadded',
        'addedbyfk',
        'datemodified',
        'lastuserfk'
    ];
}
