<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book;
class autore extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cognome',
    ];

    public function autores(){
        return $this->hasMany(book::class,"author_id");
    }
}
