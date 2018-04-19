<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->text('client_address');
            $table->string('client_email');
            $table->string('contact_number');
            $table->string('client_tel')->nullable();

            $table->string('research_title')->nullable();
            $table->text('stats_procedure')->nullable();

            $table->string('company_name');
            $table->text('company_address');
            $table->string('research_class');

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
        Schema::dropIfExists('stats');
    }
}
