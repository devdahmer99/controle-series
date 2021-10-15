<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
<<<<<<< Updated upstream
    protected $table = 'lista';
    protected $primaryKey = 'id';
    protected $timestamps = false;
    protected $incrementing = true;
=======
    protected $fillable = [
        'id',
        'descricao'
    ];
    protected $table = 'lista';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = true;
>>>>>>> Stashed changes
}
