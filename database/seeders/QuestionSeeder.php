<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new Question();
        $question->id = 1;
        $question->user_id =2;
        $question->content = "abc?";
        $question->type = Question::QUESTION_PRIVATE;
        $question->save();

        $question = new Question();
        $question->id = 2;
        $question->user_id =1;
        $question->content = "qưe?";
        $question->type = Question::QUESTION_PRIVATE;
        $question->save();

        $question = new Question();
        $question->id = 3;
        $question->user_id =1;
        $question->content = "add?";
        $question->type = Question::QUESTION_PRIVATE;
        $question->save();
    }
}
