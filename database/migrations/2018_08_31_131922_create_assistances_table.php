<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistances', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id');
            $table->bigInteger('number');
            $table->data('data_arrive')->nullable();
            $table->time('time_arrive')->nullable();
            $table->boolean('state')->default(0);
            $table->string('detail',100);
            $table->text('detail_option');
            $table->decimal('cost',10,2);

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
        Schema::dropIfExists('assistances');
    }
}
