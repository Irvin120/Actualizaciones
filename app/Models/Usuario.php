<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //use HasFactory;
    //declarar variable table
    //haciendo referencia a la tabla del modelo en la base de datos
    protected $table ="users";
    protected $primaryKey="id";
    protected $fillable = [
        'name','email','email_verified_at','password'
    ];
}
