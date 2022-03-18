<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenNetflixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examen_netflixes', function(Blueprint $table){
            $table->string('nick_name')->change();
            $table->string('name')->change();
            $table->string('last_name')->change();
            $table->string('phone')->change();
            $table->string('dni')->change();
            $table->boolean('is_active')->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_netflixes');
    }
}
