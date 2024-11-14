<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visitors extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama_teknisi','nama_perusahaan','waktu_kunjungan','keterangan'
    ];
}
