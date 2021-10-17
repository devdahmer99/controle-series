<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function temporadas(): HasMany
    {
        return $this->hasMany(Temporada::class);
    }
}
