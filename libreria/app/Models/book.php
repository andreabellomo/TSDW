<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\autore;

class book extends Model
{
    use HasFactory;
    protected $fillable = [
        'titolo',
        'prezzo',
        'author_id',
    ];

    public function autores(){
        $this->belongsTo(autore::class);
    }
}
