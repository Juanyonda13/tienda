<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Cliente extends Model
{
    use HasApiTokens, HasFactory;
    use HasFactory;

    protected $fillable = [
        'nombreCliente',
        'cedula',
        'apellidos',
        'telefono',
        'direccion',
        'email',
        'password',
        'tipoDocumento_id',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
