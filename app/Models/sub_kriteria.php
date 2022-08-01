<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sub_kriteria extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_kriteria',
        'sub_kriteria',
        'bobot'
    ];

    public function kriteria()
    {
        return $this->belongsTo('App\Models\kriteria', 'id_kriteria');
    }
}
