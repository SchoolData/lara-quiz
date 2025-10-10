<?php
declare(strict_types=1);

namespace LaraQuiz\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateQuizRunnerQuestionSurveyTable
 */
class CreateQuizRunnerQuestionSurveyTable extends Migration
{
    /**
     * @var string
     */
    private $table;

    /**
     * CreateQuizRunnerQuestionsTable constructor.
     */
    public function __construct()
    {
        $this->table = config('laraQuiz.tableQuestionSurvey');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->unsignedBigInteger('survey_id');
            $table->unsignedBigInteger('question_id');

            $table->primary(['survey_id', 'question_id']);

            $table->foreign('survey_id')
                ->references('id')->on(config('laraQuiz.tableSurveys'))
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('question_id')
                ->references('id')->on(config('laraQuiz.tableQuestions'))
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->table);
    }
}
