<?php

use Illuminate\Database\Seeder;
use App\Models\Bank;

class bankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
        	'bank_name'=>'City bank',
        	'contact'=>'sdyau',
        	'address'=>'uyduya',
        	'email'=>'toma@gmail.com',
        	'image'=>'toma',
        ]);
    }
}
