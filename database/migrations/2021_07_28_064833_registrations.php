<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('fullname');
            $table->string('username')->unique();
            $table->text('password');
            $table->string('Gender')->nullable();
            $table->double('mobile')->nullable();
            $table->text('address')->nullable();
            $table->string('education')->nullable();
            $table->string('stream')->nullable();
            $table->string('avtar')->nullable();
            $table->date('dob')->nullable();
            $table->string('current_job')->nullable();
            $table->text('token');
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
        //
    }
}
