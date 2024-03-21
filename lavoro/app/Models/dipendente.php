<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\azienda;

class dipendente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'ruolo',
        'azienda_id'
    ];

    public function aziendas(){

        return $this->belongsTo(azienda::class);

    }
}
