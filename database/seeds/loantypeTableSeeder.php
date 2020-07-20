<?php

use Illuminate\Database\Seeder;
use App\Models\Loantype;

class loantypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loantype::create(
        	[
        		'name'=>'homelone',
        		'status'=>'active',
        	]);
    }
}
