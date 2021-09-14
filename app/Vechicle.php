<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vechicle extends Model
{
    protected $table = 'vechicles';


    protected $guarded =[''];

    public function offer()
    {
        return $this->belongsTo(Offer::class,'vechicle_id');
    }
}
