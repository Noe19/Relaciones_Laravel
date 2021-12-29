<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Relacion 1 a 1
    public function user(){
        return $this->belongsTo(User::class);
    }
    // RELACIÓN DE UNO A UNO
    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
