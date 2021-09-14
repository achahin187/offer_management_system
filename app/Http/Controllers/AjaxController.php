<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Vechicle;
use Illuminate\Http\Request;

class AjaxController extends Controller
{


    public function customers()
    {


            $Customers=Customer::paginate();

        return response()->json([
            "items" => $Customers->map(function (Customer $c) {
                return [
                    "id" => $c->id,
                    "text" => $c->name
                ];
            }),
            "pagination" => [
                "more" => $Customers->hasMorePages()
            ]
        ]);
    }

    public function vechicles()
    {


            $Vechicles=Vechicle::paginate();

        return response()->json([
            "items" => $Vechicles->map(function (Vechicle $c) {
                return [
                    "id" => $c->id,
                    "text" => $c->name
                ];
            }),
            "pagination" => [
                "more" => $Vechicles->hasMorePages()
            ]
        ]);
    }



}
