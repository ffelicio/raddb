<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modality_id')->default(0)->unsigned();
            $table->string('description', 60)->nullable();
            $table->integer('manufacturer_id')->default(0)->unsigned();
            $table->string('vend_site_id', 25)->nullable();
            $table->string('model', 20)->nullable();
            $table->string('serial_number', 20)->nullable();
            $table->date('manuf_date')->nullable()->default('0000-00-00');
            $table->date('install_date')->nullable()->default('0000-00-00');
            $table->date('remove_date')->nullable()->default('0000-00-00');
            $table->integer('location_id')->default(0)->unsigned();
            $table->string('room', 20)->nullable();
            $table->string('machine_status', 50)->default('Active');
            $table->text('notes');
            $table->string('photo');
            $table->softDeletes();
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
        Schema::drop('machines');
    }
}
