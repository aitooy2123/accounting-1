<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // id bigint(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('invoice_no'); // varchar(255)
            $table->string('customer_id'); // varchar(255)
            $table->decimal('total', 15, 2); // decimal(15,2)
            $table->decimal('paid', 15, 2)->default(0); // decimal(15,2) default 0
            $table->tinyInteger('status'); // int(2)
            $table->text('balance')->nullable(); // text
            $table->text('items')->nullable(); // text nullable
            $table->date('due_date'); // date
            $table->timestamps(); // created_at, updated_at
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
