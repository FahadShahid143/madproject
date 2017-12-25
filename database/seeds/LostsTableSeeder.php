<?php

use Illuminate\Database\Seeder;

class LostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i = 0; $i < 50; $i++) {
            $lost = array (
                array(
                    'lost_item_name' => 'Book',
                    'lost_item_description' => 'Lost outside library',
                    'lost_date' => '20 November,2017',
                    'person_name' => 'Adam',
                    'person_phoneNo' => '12345',
                    'person_address' => 'Street 87, New York'
                )



            );
            DB::table('losts')->insert($lost);

        }
    }
}
