<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoria;

class prodotto extends Model
{
    use HasFactory;

    protected $fillable = ["nome" , "giacenza", "categoria_id"];

    public function prodottos(){
        return $this->belongsTo(categoria::class);
    }
}
