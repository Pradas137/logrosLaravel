<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorias;

class libros extends Model
{
    use HasFactory;

    public function categoria(){

    	return $this-> belongsTo(categorias::class);
    }
}
