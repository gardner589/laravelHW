<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEOSRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eos_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('project_id')->unsigned()->index();
            $table->string('user_id')->index();
            $table->text('description');
            $table->integer('dimX');
            $table->integer('dimY');
            $table->integer('dimZ');
            $table->integer('volume');
            $table->decimal('cost');
            $table->boolean('clean');
            $table->boolean('hinges');
            $table->boolean('threads');
            $table->date('needed_by')->nullable();
            $table->integer('number_of_parts');
            $table->integer('status')->nullable();
            $table->text('admin_notes');
            $table->date('completion_date')->nullable();
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
        Schema::dropIfExists('eos_requests');
    }
}
