<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateloaninfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('loaninfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bank_id')->nullable();
            $table->integer('loan_type_id');
            $table->integer('interest_rate');
            $table->integer('min_age_requirement');
            $table->integer('max_age_requirement');
            $table->integer('min_income');
            $table->integer('min_financial_amount');
            $table->integer('max_financial_amount');
            $table->text('gaurantor');
            $table->integer('min_loan_tenure_years');
            $table->integer('max_loan_tenure_years');
            $table->text('emp_eligibility');
            $table->text('source_income');
            $table->text('before_loan');
            $table->string('islamic',40);
            $table->string('max_loan_tenure',30);
            $table->text('approve_time');
            $table->text('service_charge');
            $table->text('late_payment');
            $table->text('terms');
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
        Schema::dropIfExists('loaninfos');
    }
}
