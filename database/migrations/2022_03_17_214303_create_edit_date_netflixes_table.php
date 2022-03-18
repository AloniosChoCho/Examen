<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditDateNetflixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edit_date_netflixes', function (Blueprint $table) {
            $table->id();
            $table->string('avatar');
            $table->string('nick_name', 20);
            $table->string('name', 20);
            $table->string('last_name' , 20);
            $table->string('phone', 9);
            $table->string('dni', 8);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edit_date_netflixes');
    }
}
