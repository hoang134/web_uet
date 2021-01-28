<?php

namespace Database\Seeders;


use App\Models\QuestionReply;
use Illuminate\Database\Seeder;

class QuestionRelySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionReply = new QuestionReply();
        $questionReply->id = 1;
        $questionReply->question_id = 1;
        $questionReply->content = "123";
        $questionReply->save();

        $questionReply = new QuestionReply();
        $questionReply->id = 2;
        $questionReply->question_id = 2;
        $questionReply->content = "123";
        $questionReply->save();

    }
}
