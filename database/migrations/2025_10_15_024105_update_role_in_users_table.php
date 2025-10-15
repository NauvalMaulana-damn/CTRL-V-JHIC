<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['SUPERADMIN', 'EDITOR', 'VIEWER'])->default('VIEWER')->change();
            $table->string('role_key')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['SUPERADMIN', 'EDITOR'])->default('EDITOR')->change();
            $table->dropColumn('role_key');
        });
    }
};
