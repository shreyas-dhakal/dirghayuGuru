<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnInTable extends Migration
{
    public function up()
    {
        Schema::table('department', function (Blueprint $table) {
            $table->renameColumn('dest', 'description');
        });
    }

    public function down()
    {
        Schema::table('department', function (Blueprint $table) {
            $table->renameColumn('dest', 'description');
        });
    }
}


