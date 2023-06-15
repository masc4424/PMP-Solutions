<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_type');
            $table->string('project_manager');
            $table->text('project_description');
            $table->string('client_spoc_name');
            $table->string('client_spoc_email');
            $table->string('client_spoc_contact');
            $table->date('project_startDate');
            $table->date('project_endDate');
            $table->string('project_status');
            $table->foreign('verical_id')->refernces('id')->on ('verticals');
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
        Schema::dropIfExists('projects');
    }
}
