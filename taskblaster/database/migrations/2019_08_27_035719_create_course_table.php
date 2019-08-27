<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('
            CREATE TABLE course (
                id      INT(11)          AUTO_INCREMENT  NOT NULL,
                code    VARCHAR(12)                     NOT NULL,
                description     VARCHAR(255)            NOT NULL,
                term    INT(2)                          NOT NULL,
                PRIMARY KEY (id)
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
        Schema::dropIfExists('course');
    }
}
