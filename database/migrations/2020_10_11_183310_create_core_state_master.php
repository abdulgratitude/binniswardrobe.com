<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreStateMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_state_master', function (Blueprint $table) {
            $table->string('state_code','25');
            $table->string('state_name','60');
            $table->string('state_description','255');
            $table->string('country_code','25');
            $table->boolean('is_active')->default(1);
            $table->boolean('shipping_enabled')->default(0);
            $table->string('created_by','15');
            $table->string('modified_by','15');
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('modified_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

//            $table->foreign('country_code')->references('country_code')->on('core_country_master')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_state_master');
    }
}
