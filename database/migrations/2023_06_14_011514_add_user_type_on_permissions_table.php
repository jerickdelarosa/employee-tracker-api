<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserTypeOnPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->foreignId('user_type_id')
                ->after('id')
                ->references('id')
                ->on('user_types')
                ->cascadeOnDelete();

            $table->foreignId('role_code')
                ->after('user_type_id')
                ->references('code')
                ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_type_id');

            $table->dropConstrainedForeignId('role_code');
        });
    }
}
