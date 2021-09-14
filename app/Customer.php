<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';


    protected $guarded =[''];






    public function offer()
    {
        return $this->belongsTo(Offer::class,'customer_id');
    }



}
