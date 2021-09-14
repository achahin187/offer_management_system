<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offer';


    protected $guarded =[''];


    public function vechicle_customer()
    {
        return $this->belongsToMany(Vechicle::class, "offer", "customer_id", "vechicle_id");
    }



    public function customer(){
        return $this->belongsTo(\App\Customer::class);
    }

    public function vechicle(){
        return $this->belongsTo(\App\Vechicle::class);
    }

}
