<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loan_status')->insert([
            'id'=>'1',
            'description' => 'Submitted',
        ]);

        DB::table('loan_status')->insert([
            'id'=>'2',
            'description' => 'Approved',
        ]);

        DB::table('loan_status')->insert([
            'id'=>'3',
            'description' => 'Released',
        ]);

        DB::table('loan_status')->insert([
            'id'=>'4',
            'description' => 'Partially Paid',
        ]);

        DB::table('loan_status')->insert([
            'id'=>'5',
            'description' => 'Paid',
        ]);
    }
}
