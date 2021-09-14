<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerVechicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("customer_id");
            $table->unsignedInteger("vechicle_id");
            $table
            ->foreign("customer_id")
            ->references("id")
            ->on("customers")
            ->onDelete("cascade");

            $table
            ->foreign("vechicle_id")
            ->references("id")
            ->on("customers")
            ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_vechicle');
    }
}
