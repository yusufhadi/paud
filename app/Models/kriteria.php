<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kriteria extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['kriteria'];

    public function sub_kriteria()
    {
        return $this->hasOne('App\Models\sub_kriteria', 'id_kriteria');
    }
}
