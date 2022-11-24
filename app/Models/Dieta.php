<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'dieta',
        'tretamiento'
    ];

    /**
     * The attributes that are guarded.
     *
     * @var string[]
     */
    protected $guarded = [
        'cria_id',
        'corral_id'
    ];

    /**
     * Relación con la cría.
     */
    public function cria()
    {
        return $this->belongsTo(Cria::class);
    }

    /**
     * Relación con el corral.
     */
    public function corral()
    {
        return $this->belongsTo(Corral::class);
    }
}
