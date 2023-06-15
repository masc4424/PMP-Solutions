<?php
// database/migrations/<timestamp>_create_project_roles_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectRolesTable extends Migration
{
    public function up()
    {
        Schema::create('project_roles', function (Blueprint $table) {
            $table->id();
            $table->string('member_role_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_roles');
    }
}

