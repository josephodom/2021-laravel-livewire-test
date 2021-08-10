<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            
            // I don't know off the top of my head if this is enough characters for all names
            // Just using an estimate for a test project!
            $table->string('first_name', 64);
            $table->string('last_name', 64);
            
            // Plenty of space for address lines 1 and 2, which are 46 characters each
            // Plus city & state, which are 50 characters each
            $table->string('address', 200);
            
            // Probably overkill for these lengths
            $table->string('email', 100);
            $table->string('company', 100);
            $table->string('phone_number', 32);
            
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
        Schema::dropIfExists('customers');
    }
}
