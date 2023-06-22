<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes';

    public $timestamps = false;

    public function cuenta():BelongsTo
    {
        return $this->belongsTo(Cuenta::class);
    }

    public function cambiarEstado():void
    {
        $this->baneada = !$this->baneada;
        $this->save();
    }
}
