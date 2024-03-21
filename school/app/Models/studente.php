<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\classe;

class studente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cognome',
        'eta',
        "class_id"
    ];

    public function classes(){
        $this->belongsTo(classe::class);
    }
}
