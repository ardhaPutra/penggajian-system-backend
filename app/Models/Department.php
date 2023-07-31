<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'tabel_department';

    protected $fillable = [
        'nm',
        'ctn',
        'dateadded',
        'addedbyfk',
        'datemodified',
        'lastuserfk'
    ];
}
