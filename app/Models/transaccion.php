<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaccion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'transaccion';
    public function transaccion()
    {
        return $this->belongsToMany(Transaccion::class, 'transaccion_jugadores', 'id','id_clubs');
    }
}
