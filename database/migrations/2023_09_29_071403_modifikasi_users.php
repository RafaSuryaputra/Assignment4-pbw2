<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //penambahan kolom baru
            $table->string('username', 100);
            $table->string('address', 1000);
            $table->string('phoneNumber', 20);
            $table->date('birthDate')->nullable();
            $table->string('Agama', 20);
            $table->unsignedInteger('JenisKelamin')->notNull();

            //modifikasi kolom
            
            // Rafa Suryaputra - 6706223162
            $table->renameColumn('name', 'fullName');
            $table->string('email')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
