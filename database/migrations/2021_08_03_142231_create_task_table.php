<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id')->nullable();
            $table->string('task', 500)->nullable();
            $table->integer('status')->nullable()->comment('0 - Pendente 1 - Concluída');
            $table->boolean('opened')->nullable()->comment('0 - Não aberta 1 - Aberta');
            $table->dateTime('dateTask')->nullable();
            $table->dateTime('dateOpened')->nullable();
            $table->dateTime('dateClosed')->nullable();
            $table->integer('prioridade')->nullable();
        });
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
