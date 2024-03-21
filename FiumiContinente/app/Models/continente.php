<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\fiume;

class continente extends Model
{
    use HasFactory;
    protected $fillable = ["nome" , "area"];

    public function fiumes(){
        return $this->hasMany(fiume::class);
    }
}
