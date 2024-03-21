<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\team;

class player extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "cognome", "eta","team_id"];

    public function teams(){
        return $this->belongsTo(team::class);
    }
}
