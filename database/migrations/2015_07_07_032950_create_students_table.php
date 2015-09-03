<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');//Фамилия
            $table->string('first_name');//Имя
            $table->string('middle_name');//Отчетво
            $table->date('birthday');//Дата рождеия
            $table->tinyInteger('residency_id');//Резидентство 1-резидент 2-нерезидент
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
