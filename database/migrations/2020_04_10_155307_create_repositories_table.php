<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group')->nullable();
            $table->integer('gid')->nullable();
            $table->string('name')->nullable();
            $table->text('description', 65535)->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('is_active')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('repo')->nullable();
            $table->integer('addr_id')->nullable();
            $table->string('rin')->nullable();
            $table->string('phon')->nullable();
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
        Schema::dropIfExists('repositories');
    }
}
