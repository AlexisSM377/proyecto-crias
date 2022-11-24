<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cria extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'date',
        'peso',
        'color_muscular',
        'marmoleo',
        'costo',
        'name',
        'descripcion',
        'cria_cuarentena'
    ];

    /**
     * The attributes that are guarded.
     *
     * @var string[]
     */
    protected $guarded = [
        'proveedores_id',
        'clasificacion_carnes_id',
        'crias_id'
    ];

    /**
     * Relación con clasificación de carne.
     */
    public function clasificacionCarne()
    {
        return $this->belongsTo(ClasificacionCarne::class);
    }

    /**
     * Relación con corral de la cría.
     */
    public function corral()
    {
        return $this->belongsTo(Corral::class);
    }

    /**
     * Relación con proveedor.
     */
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    /**
     * Relación a tratamiento por cuarentena.
     */
    public function tretamientos()
    {
        return $this->hasMany(Dieta::class);
    }

}
