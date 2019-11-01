<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Owner;
class Pet extends Model
{
    protected $table = 'pets';

    protected $guarded = [];
    
    public function owner() {
       
        return $this->belongsTo(Owner::class, 'id', 'owner_id');
    }



}
