<?php

namespace Database\Seeders;


use App\Models\Question;
use App\Models\QuestionReply;

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
        // \App\Models\User::factory(10)->create();

         $this->call(QuestionSeeder::class);
         $this->call(QuestionRelySeeder::class);
         $this->call(MessengerSeeder::class);
         $this->call(CetStudentAccSeeder::class);
         //$this->call(CetAdminAccSeeder::class);

    }
}
