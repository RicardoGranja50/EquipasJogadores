<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogadores extends Model
{
    use HasFactory;

    protected $primaryKey="id_jogadores";
    protected $table="jogadores";

    public function equipas(){

        return $this->belongsTo('App\Models\Equipas', 'id_equipa');
    }
}
