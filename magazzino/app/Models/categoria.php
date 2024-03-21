<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\prodotto;

class categoria extends Model
{
    use HasFactory;
    protected $fillable =["nome"];

    public function categorias(){
        return $this->hasMany(prodotto::class);
    }

}
