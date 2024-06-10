<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiController;

class QuizDivertissementMediumSeeder extends Seeder
{
    private $api;

    public function __construct()
    {
        $this->api = new ApiController();
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($quiz = 0; $quiz < 8; $quiz++) {
            $newQuiz = $this->api->getQuiz("sport")->getData(true)["data"];
            $newQuizId = DB::table("quiz")->insertGetId(["difficulty" => 1, "type" => 0]);

            for ($question = 0; $question < 5; $question++) {
                $getImage = $this->api->getImage($newQuiz[$question]["question"])->getData(true)["data"];
                $newQuestionId = DB::table("question")->insertGetId([
                    "quizId" => $newQuizId,
                    "label" => $newQuiz[$question]["question"],
                    "image" => $getImage,
                    "order" => $question
                ]);

                DB::table("response")->insert([
                    "questionId" => $newQuestionId,
                    "value" => $newQuiz[$question]["answer"],
                    "badAnswer" => false
                ]);

                foreach ($newQuiz[$question]["badAnswers"] as $badAnswer) {
                    DB::table("response")->insert([
                        "questionId" => $newQuestionId,
                        "value" => $badAnswer,
                        "badAnswer" => true
                    ]);
                }
            }
        }
    }
}
