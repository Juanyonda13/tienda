<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetalleProducto;
use App\Models\ProvedorProducto;
use App\Models\CategoriaProducto;
class Producto extends Model
{
    use HasFactory;
    public function Detalle(){
        return $this->belongsToMany(DetalleProducto::class,'productos');
        return $this->belongsTomany(ProvedorProducto::class,'productos');
        return $this->belongsTomany(CategoriaProducto::class);


    }

    public function Provedor(){
        return $this->belongsTomany(ProvedorProducto::class,'productos');
    }
    public function categoria(){
        return $this->belongsTomany(CategoriaProducto::class);
    }
}
