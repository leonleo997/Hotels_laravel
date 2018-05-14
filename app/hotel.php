<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{

    protected $table = 'hotels';

    protected $fillable = [
        'nombre', 'costo', 'estrellas', 'direccion', 'ciudad'
    ];

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }

    public function scopeSearch($query, $title){
        return $query->where('name', 'LIKE','%$title%')->orwhere('city','LIKE','%$title%');
    }

   
}
