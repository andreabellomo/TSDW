<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\player;

class team extends Model
{
    use HasFactory;
    protected $fillable = ["nome", "citta", "anno_fondazione"];

    public function players(){
        return $this->hasMany(player::class, "team_id");
    }
}
