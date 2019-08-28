<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('
            CREATE TABLE student (
                id      INT(11)     AUTO_INCREMENT       NOT NULL,
                user_id BIGINT(20)                         NOT NULL,
                name    VARCHAR(255)                    NOT NULL,
                email   VARCHAR(255)                    NOT NULL,
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
        Schema::dropIfExists('student');
    }
}
