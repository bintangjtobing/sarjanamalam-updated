<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberdbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profilepicture');
            $table->string('username');
            $table->string('password');
            $table->string('unpass');
            $table->string('fullname');
            $table->string('role');
            $table->string('birthdate');
            $table->string('status');
            $table->string('gender');
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
        Schema::dropIfExists('memberdbs');
    }
}
