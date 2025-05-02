<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{

    protected $fillable = [
        'nombre'
    ];

    public function imagen()
    {
        return $this->hasMany(Foto::class);
    }
}
