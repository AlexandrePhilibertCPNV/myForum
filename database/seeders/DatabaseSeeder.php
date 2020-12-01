<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OpinionstatesTableSeeder::class);
        $this->call(ReferencesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(OpinionsTableSeeder::class);
        $this->call(OpinionstatetransitionsTableSeeder::class);
        $this->call(OpinionsHasReferencesTableSeeder::class);
        $this->call(UsersCommentOpinionsTableSeeder::class);
    }
}
