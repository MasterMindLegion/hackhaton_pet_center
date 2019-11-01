<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pet;
class Owner extends Model
{
   protected $table = 'owners';

   protected $guarded = [];

   public function pet() {

       return $this->hasMany(Pet::class);
   }
}
