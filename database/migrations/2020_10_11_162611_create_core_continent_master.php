<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreContinentMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_continent_master', function (Blueprint $table) {
            $table->string('continent_code','25');
            $table->string('continent_name','60');
            $table->string('continent_description','255');
            $table->boolean('is_active')->default(1);
            $table->string('created_by','15');
            $table->string('modified_by','15');
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('modified_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        DB::table('core_continent_master')->insert(
            array(
                array('continent_code' => 'AF', 'continent_name' => 'Africa',        'continent_description' => 'Africa',        'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'AS', 'continent_name' => 'Asia',          'continent_description' => 'Asia',          'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'AUS','continent_name' => 'Australia',     'continent_description' => 'Australia',     'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'EU', 'continent_name' => 'Europe',        'continent_description' => 'Europe',        'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'ME', 'continent_name' => 'Middle East',   'continent_description' => 'Middle East',   'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'NA', 'continent_name' => 'North America', 'continent_description' => 'North America', 'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'OC', 'continent_name' => 'Oceania',       'continent_description' => 'Oceania',       'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'OT', 'continent_name' => 'Others',        'continent_description' => 'Others',        'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
                array('continent_code' => 'SA', 'continent_name' => 'South America', 'continent_description' => 'South America', 'is_active' => 1, 'created_by' => 'system', 'modified_by' => 'system'),
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
        Schema::dropIfExists('core_continent_master');
    }
}
