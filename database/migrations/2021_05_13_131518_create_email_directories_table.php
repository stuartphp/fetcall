<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_directories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('email_account_id');
            $table->string('main');
            $table->string('sub');
            $table->timestamps();
            $table->foreign('email_account_id')->references('id')->on('email_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_directories');
    }
}
