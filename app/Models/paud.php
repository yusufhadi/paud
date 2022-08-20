<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class paud extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_user',
        'nama',
        'alamat',
        'kode_pos',
        'no_tlp',
        'jmlh_anak',
        'jmlh_pengajar',
        'lat',
        'leng',
        'usia_anak',
        'usia_pengajar',
        'status_pengajar',
        'waktu_pelaksanaan',
        'fasilitas_paud',
        'metode_pembelajaran',
        'biaya',
        'transportasi',
        'gambar',
        'paud_desc'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
