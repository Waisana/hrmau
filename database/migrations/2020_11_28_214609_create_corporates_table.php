<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporates', function (Blueprint $table) {
            $table->id();
            $table->string('orgName');
            $table->string('postalAddress');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email',191)->unique();
            $table->string('physicalAddress');
            $table->string('contactPerson');
            $table->string('title');
            $table->text('sector');
            $table->string('noOfstaff');
            $table->string('interest');
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
        Schema::dropIfExists('corporates');
    }
}
