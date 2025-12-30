<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BancoModel extends Model
{
      protected $table = 'banco_models';
      
      protected $fillable =  ['nome'];

       public $timestamps = false;
}
