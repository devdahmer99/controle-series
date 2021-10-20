<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $temporadaId)
 */
class Temporada extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;

    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodios(): HasMany
    {
        return $this->hasMany(Episodio::class);
    }

    public function getEpisodiosAssistidos(): Collection
    {
        return $this->episodios->filter(function (Episodio $episodio)
        {
            return $episodio->assistido;
        });
    }
}
