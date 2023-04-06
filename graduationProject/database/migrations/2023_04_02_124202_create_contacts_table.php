<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('subject');
            $table->text('message');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}