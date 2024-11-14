<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class visitors extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama_teknisi','nama_perusahaan','waktu_kunjungan','keterangan'
    ];
}
