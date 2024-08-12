<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vaga extends Model
{
   use Notifiable, HasFactory;

   protected $fillable = [
    'titulo', 'descricao', 'localizacao', 'salario', 'empresa_id',
   ];

public function empresa(){
    return $this->belongsTo(Empresa::class);
   }

   public function inscricoes(){
    return $this->hasMany(Inscricao::class);
   }
}