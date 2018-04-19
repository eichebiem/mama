<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('company_name');
            $table->text('company_address');
            $table->string('company_email');
            $table->string('company_tel')->nullable();
            $table->integer('participants');

            $table->string('contact_person');
            $table->string('contact_number');
            $table->string('contact_designation');
            $table->string('contact_department');

            $table->string('special_instructions')->nullable();

            $table->string('course');
            $table->string('ewan');
            $table->string('days')->nullable();

            $table->boolean('unread')->default('1');

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
        Schema::dropIfExists('workshops');
    }
}
