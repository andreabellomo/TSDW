<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cantante;

class canzone extends Model
{
    use HasFactory;

    protected $fillable =["titolo", "durata", "cantante_id"];

    public function cantantes(){
        $this->belongsTo(cantante::class);
    }
}
