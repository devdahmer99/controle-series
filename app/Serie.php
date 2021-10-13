<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'lista';
    protected $primaryKey = 'id';
    protected $timestamps = false;
    protected $incrementing = true;
}
