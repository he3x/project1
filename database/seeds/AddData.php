<?php

use Illuminate\Database\Seeder;

class AddData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peserta')->insert([
        	[
        		"nama"		=>"sidiq",
				"mail"		=>"sidiq@gmaio.com",
				"phone"		=>"098877633"
        	]
        ]);
    }
}
