<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->integer('r_id')->nullable();
            $table->string('r_name',50);
            $table->string('contact',20);
            $table->string('email',64);
            $table->text('address');
            $table->string('birth')->nullable();
            $table->string('work',30);
            $table->string('marital',30)->nullable();
            $table->string('year_exp',50);
            $table->string('monthly_inc',30);
            $table->string('yearly_inc',40);
            $table->string('before_loan',30);
            $table->string('loan_amount',30);
            $table->string('gaurantor_name',30);
            $table->string('gaurantor_relation',50);
            $table->string('gaurantor_contact',40);
            $table->text('gaurantor_address');
            $table->text('image');
            $table->text('details');
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
        Schema::dropIfExists('loans');
    }
}
