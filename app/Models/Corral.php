<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corral extends Model
{
    use HasFactory;

    /**
     * Tabla asociado con el modelo.
     *
     * @var string
     */
    protected $table = 'corrales';
}
