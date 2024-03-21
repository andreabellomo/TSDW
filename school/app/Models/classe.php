<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\studente;


class classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'scuola',
        'anno',
        'materia',
    ];

    public function studentes(){
        return $this->hasMany(studente::class, 'class_id');
    }
}
