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
    $table->id(); // ต้องมี auto increment
    $table->string('customer_code')->unique();
    $table->string('name');
    $table->string('company_name');
    $table->string('tax_number');
    $table->string('phone');
    $table->string('email');
    $table->string('address');
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
