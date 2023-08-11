<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiBulanan extends Model
{
    use HasFactory;
    protected $table = 'tabel_gaji_bulanan';

    protected $fillable = [
        'nama',
    ];


}
