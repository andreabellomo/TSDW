<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\canzone;

class cantante extends Model
{
    use HasFactory;
    protected $fillable = ["nome" , "genere"];

    public function canzones(){
        $this->hasMany(canzone::class);
    }
}
