<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pet;
class Owner extends Model
{
   protected $table = 'owners';

   public function pet() {

       return $this->hasMany(Pet::class);
   }
}
