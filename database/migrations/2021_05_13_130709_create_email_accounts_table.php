<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uesr_id');
            $table->boolean('is_imap')->default(1);
            $table->string('incoming_mail');
            $table->unsignedSmallInteger('incoming_port');
            $table->boolean('incoming_ssl')->default(0);
            $table->boolean('incoming_spa')->default(0);
            $table->string('outgoing_mail');
            $table->unsignedSmallInteger('outgoing_port');
            $table->unsignedTinyInteger('encription_method');
            $table->boolean('outgoing_spa')->default(0);
            $table->string('color', 7)->default('#ffffff');
            $table->unsignedBigInteger('directory');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_accounts');
    }
}
