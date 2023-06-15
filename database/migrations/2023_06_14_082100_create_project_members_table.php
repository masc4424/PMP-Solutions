<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectMembersTable extends Migration
{
    public function up()
    {
        Schema::create('project_members', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active');
            $table->boolean('is_project_admin');
            $table->foreign('user_id')->refernces('id')->on ('user');
            $table->foreign('project_id')->refernces('id')->on ('projects');
            $table->foreign('project_role_id')->refernces('id')->on ('project_roles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_members');
    }
}
