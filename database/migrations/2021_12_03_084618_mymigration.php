<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mymigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function(Blueprint $tb){
            $tb->string('nama');
            $tb->string('email');
            $tb->string('alamat');
            $tb->string('pesan');
        });

        Schema::create('tb_admin', function(Blueprint $tb){
            $tb->string('nama');
            $tb->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
