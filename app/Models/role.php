<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['role'];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id_role');
    }
}
