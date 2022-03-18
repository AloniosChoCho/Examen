<?php

use App\EditDateNetflix;
use Illuminate\Database\Seeder;

class NetflixTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new EditDateNetflix();
        $admin->avatar ='Alonios.png';
        $admin->nick_name ='Alonios';
        $admin->name='Alonso';
        $admin->last_name='Rios Mantari';
        $admin->phone='918553749';
        $admin->dni='70915890';
        $admin->save();
    }
}
