<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    //use HasFactory;
    protected $table="temperatura";
    protected $primaryKey="num";
    protected $fillable = [
        'message', 'sensor_num','value', 'recorded'
    ];
}
