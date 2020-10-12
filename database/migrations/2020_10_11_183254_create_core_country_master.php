<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreCountryMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_country_master', function (Blueprint $table) {
            $table->string('country_code','25');
            $table->string('country_name','60');
            $table->string('country_description','255');
            $table->string('default_currency_code','20');
            $table->string('country_image','255');
            $table->string('continent_code','25');
            $table->string('country_code_iso3','5');
            $table->string('country_prefix','25');
            $table->boolean('is_active')->default(1);
            $table->boolean('shipping_enabled')->default(0);
            $table->boolean('check_pincode_delivery_serviceable')->default(0);
            $table->string('created_by','15');
            $table->string('modified_by','15');
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('modified_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

//            $table->foreign('continent_code')->references('continent_code')->on('core_continent_master')->onDelete('cascade');
//            $table->foreign('default_currency_code')->references('currency_code')->on('core_currency_master')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_country_master');
    }
}
