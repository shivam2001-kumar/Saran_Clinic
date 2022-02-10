<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGernalBillIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gernal_bill_ids', function (Blueprint $table) {
            $table->id();
            // $table->string('bill_id',20);
            // $table->string('title',100);
            // $table->string('total_amonut',20);
            // $table->string('bill_pic',200);
            // $table->string('paid_amount',100);
            // $table->string('date',20);
            // $table->string('description',200);
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
        Schema::dropIfExists('gernal_bill_ids');
    }
}
