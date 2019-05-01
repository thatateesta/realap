<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answor extends Model
{
   public function quations()
   {
       return $this->belongsTo(quation::class);
   }

   public function users()
   {
       return $this->belongsTo(USER::class);
    
   }

   public function likes()
   {
       return $this->hasMany(Like::class);
   }
}
