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
        Schema::table('posts', function (Blueprint $table) {
            //alter table

            //create column called user_id and make it foregin key
            //if i don't mention table name directly will take table from foregin name
            $table->foreignId('user_id')->nullable()->constrained()  ;
            //here will be an exception cause he don't know what value to put
           // if there is an exception this will not reflect on migration table
           //accept nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};