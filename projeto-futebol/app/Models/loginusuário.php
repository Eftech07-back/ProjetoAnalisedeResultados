<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginusuário extends Model
{
   use HasFactory;

   protected $table = 'loginusuarios';

   protected $fillable = [
'nome',
'email',
'senha',
'data_nascimento',
'cpf',



];
public $timestamps = false;
}






?>