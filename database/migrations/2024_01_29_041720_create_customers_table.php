<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('store_id', 50);
            $table->string('first_name', 50);
            $table->string('last_name', 100);
            $table->string('email', 50);
            $table->unsignedBigInteger('address_id');
            $table->string('dni', 20);
            $table->dateTime('create_date');
            $table->dateTime('last_update');
            $table->date('birthdate');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
