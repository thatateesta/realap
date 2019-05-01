<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class quation extends Model
{
        
    public function users()
        {
        
        return $this->belongsTo(User::class);
            
        }

    public function answors()
        {

        return $this->hasMany(Answor::class);

        }
    public function categori()
    {
        return $this->belongsTo(Catagory::class);
    }


}
