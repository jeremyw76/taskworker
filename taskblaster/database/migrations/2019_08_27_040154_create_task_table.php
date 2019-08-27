<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('
            CREATE TABLE task (
                id          INT(11)     AUTO_INCREMENT  NOT NULL,
                student_id  INT(11)                     NOT NULL,
                course_id   INT(11)                     NOT NULL,
                heading     VARCHAR(255)                NOT NULL,
                notes       VARCHAR(255),
                during_class TINYINT    NOT NULL        DEFAULT 0,
                due_date    TIMESTAMP,
                completed   TINYINT     NOT NULL        DEFAULT 0,
                PRIMARY KEY(id)
            )
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
