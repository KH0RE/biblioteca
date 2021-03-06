<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasOne(User::class);
    }

    public function libros(){
        return $this->hasMany(Libros::class);
    }
}
