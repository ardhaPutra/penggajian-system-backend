<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsalTransfer extends Model
{
    use HasFactory;

    protected $table = 'tabel_asal_transfer';

    protected $fillable = [
        'nama',
    ];
}
