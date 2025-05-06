<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{

    protected $fillable = [
        'titulo',
        'descripcion',
        'barrio_id',
        'ruta',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barrio()
    {
        return $this->belongsTo(Barrio::class);
    }
}
