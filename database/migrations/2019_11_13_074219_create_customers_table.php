<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id',30);
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('contact',30);
            $table->text('password');
            $table->text('address',100)->nullable();;
            $table->text('permanent',100)->nullable();;
            $table->string('image')->nullable();
            $table->string('role');
            $table->string('status')->nullable();;
            $table->string('country',20)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
