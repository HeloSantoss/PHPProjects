<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Empresa extends Authenticatable
{
   use Notifiable, HasFactory;

   protected $fillable = [
    'nome', 'email', 'password', 'nomeEmpresa', 'descricaoEmpresa',
   ];

   protected $hidden = [
      'password','remember_token',
   ];

   public function vaga(){
    return $this->hasMany(Vaga::class);
   }







}