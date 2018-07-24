<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateFileGeneratorsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('ore.file-generator.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->text('mock_data')->nullable();
            $table->integer('repository_id')->unsigned()->nullable();
            $table->foreign('repository_id')->references('id')->on(Config::get('ore.repository.table'));
            $table->text('input')->nullable();
            $table->string('filename');
            $table->string('filetype');
            $table->text('body')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('ore.file-generator.table'));
    }
}
