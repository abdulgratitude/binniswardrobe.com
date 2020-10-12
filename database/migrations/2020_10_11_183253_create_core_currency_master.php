<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreCurrencyMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_currency_master', function (Blueprint $table) {
            $table->string('currency_code','25');
            $table->string('currency_name','60');
            $table->string('currency_description','255');
            $table->string('image_url','255')->nullable();
            $table->string('currency_symbol','5');
            $table->string('currency_symbol_code','50');
            $table->string('created_by','15');
            $table->string('modified_by','15');
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('modified_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        DB::table('core_currency_master')->insert(
            array(
                array('currency_code' => 'AED', 'currency_name' => 'AED', 'currency_description' => 'Dirhams',  'image_url' => NULL, 'currency_symbol' => 'AED',  'currency_symbol_code' => '&#x62f;&#x2e;&#x625;', 'created_by' => 'admin','modified_by' => 'admin',),
                array('currency_code' => 'CHF', 'currency_name' => 'CHF', 'currency_description' => 'CHF',      'image_url' => NULL, 'currency_symbol' => 'CHF',  'currency_symbol_code' => '&#x20A3;',             'created_by' => 'admin','modified_by' => 'admin',),
                array('currency_code' => 'EUR', 'currency_name' => 'EUR', 'currency_description' => 'EUR',      'image_url' => NULL, 'currency_symbol' => 'Euro', 'currency_symbol_code' => '&#8364;',              'created_by' => 'admin','modified_by' => 'admin',),
                array('currency_code' => 'GBP', 'currency_name' => 'GBP', 'currency_description' => 'GBP',      'image_url' => NULL, 'currency_symbol' => 'GBP',  'currency_symbol_code' => '&#163;',               'created_by' => 'admin','modified_by' => 'admin',),
                array('currency_code' => 'INR', 'currency_name' => 'INR', 'currency_description' => 'INR',      'image_url' => NULL, 'currency_symbol' => 'Rs',   'currency_symbol_code' => '&#8377;',              'created_by' => 'admin','modified_by' => 'admin',),
                array('currency_code' => 'SGD', 'currency_name' => 'SGD', 'currency_description' => 'SGD',      'image_url' => NULL, 'currency_symbol' => 'SGD',  'currency_symbol_code' => '&#36;',                'created_by' => 'admin','modified_by' => 'admin',),
                array('currency_code' => 'USD', 'currency_name' => 'USD', 'currency_description' => 'USD',      'image_url' => NULL, 'currency_symbol' => 'USD',  'currency_symbol_code' => '&#36;',                'created_by' => 'admin','modified_by' => 'admin',),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_currency_master');
    }
}
