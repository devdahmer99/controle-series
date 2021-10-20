<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $nome
 * @method static find(int $serieId)
 */
class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function temporadas(): HasMany
    {
        return $this->hasMany(Temporada::class);
    }
}
