<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class OpinionsHasReferencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opinions_has_references')->delete();
        
        \DB::table('opinions_has_references')->insert(array (
            0 => 
            array (
                'id' => 1,
                'reference_id' => 4,
                'opinion_id' => 9,
            ),
            1 => 
            array (
                'id' => 2,
                'reference_id' => 7,
                'opinion_id' => 13,
            ),
            2 => 
            array (
                'id' => 3,
                'reference_id' => 8,
                'opinion_id' => 12,
            ),
            3 => 
            array (
                'id' => 4,
                'reference_id' => 9,
                'opinion_id' => 19,
            ),
            4 => 
            array (
                'id' => 5,
                'reference_id' => 10,
                'opinion_id' => 20,
            ),
        ));
        
        
    }
}