<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('email_account_id');
            $table->timestamp('recieved');
            $table->string('from');
            $table->string('reply_to');
            $table->string('to');
            $table->string('cc');
            $table->string('subject');
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
        Schema::dropIfExists('emails');
    }
}
