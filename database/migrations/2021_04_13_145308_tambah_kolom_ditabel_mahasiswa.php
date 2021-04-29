<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomDitabelMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function(Blueprint $table){
            $table->string('Email',20)->after('No_Handphone')->nullable()->unique();
            $table->date('Tanggal_Lahir')->after('Email')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function(Blueprint $table){
            $table->dropColumn('Email',20);
            $table->dropColumn('Tanggal_Lahir');
        });
    }
}