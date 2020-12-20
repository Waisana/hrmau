<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetiredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retireds', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('otherNames');
            $table->string('title');
            $table->string('sex');
            $table->string('dob');
            $table->string('mailadd');
            $table->string('nationality');
            $table->string('telephone');
            $table->string('fax')->nullable();
            $table->string('email',191)->unique();
            $table->string('interest');
            $table->string('qualification');
            $table->string('experience');
            $table->string('approve');
            $table->string('dapproved');
            $table->string('doApp');
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
        Schema::dropIfExists('retireds');
    }
}
