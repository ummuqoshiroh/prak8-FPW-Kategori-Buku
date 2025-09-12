<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    protected $table = 'kebutuhan';

    protected $fillable = [
        'nama_barang',
        'jumlah',
        'keterangan'
    ];
}
