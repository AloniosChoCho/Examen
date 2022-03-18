<?php

use App\MasVistos;
use Illuminate\Database\Seeder;

class ViewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new MasVistos();
        $admin->imagen ='uw.png';
        $admin->title='Dragon Ball Super - El regreso del hechicero "MORO"';
        $admin->descripcion='Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alguna alteración, inyectando humor o palabras aleatorias que no parecen ni siquiera creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, debes asegurarte de que no hay nada embarazoso escondido en medio del texto.';
        $admin->save();
    }
}