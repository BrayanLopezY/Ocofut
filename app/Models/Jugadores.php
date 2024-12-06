<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jugadores extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'jugadores';
    protected $primaryKey = 'id_club';

    

    public function categoria()
    {
        return $this->belongsTo(club::class,'id_clubs');
    }

}

