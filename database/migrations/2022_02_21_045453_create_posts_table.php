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
        Schema::create('posts', function (Blueprint $table) {
           //first parameter is table name then call back function
            $table->id();
            $table->string('title',100);
            //text dosen't take length while string take length
            $table->text('description');
            //text columns dosen't need length.
            //i want to add new column
            //i will add it from terminal using
            //php artisan make:migration add_test_column_to_posts_table
            $table->timestamps();
            //timestamps all type of colums are available
        //schema create table
        //schema table
        });
        //timestamop crate 2 column create ,update time stamp

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
//down method responsible for rollback i think
//rollback reverse command like create table here in down drop table
// hold sql statement that responsible for database structure
//coomand:php artisan rollback=>it's like ctrl+z =>rollback and reverse migrate that you did
//and then called down method


//php artisan make:migration make migration filr
//every change you should use php artisan make:migration then php artisan migrate