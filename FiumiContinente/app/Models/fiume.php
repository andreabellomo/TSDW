<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\continente;

class fiume extends Model
{
    use HasFactory;
    protected $fillable = ["nome" , "lunghezza" , "foce" , "continente_id"];

    public function continentes(){
        return $this->belongsTo(continente::class);
    }

}
