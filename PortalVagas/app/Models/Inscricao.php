<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Inscricao extends Authenticatable
{
   use Notifiable, HasFactory;

   protected $fillable = [
    'usuario_id', 'vaga_id', 'status',
   ];

public function usuario(){
    return $this->belongsTo(Usuario::class);
   }

   public function vaga(){
    return $this->hasMany(Vaga::class);
   }
}