<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Perfil extends Model
{
    use HasFactory;
    protected $table = 'perfiles';

    public $incrementing = false;
    public $timestamps = false;

    public function cuenta():HasMany
    {
        return $this->hasMany(Cuenta::class);
    }
}
