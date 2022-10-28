<?php

namespace Database\Seeders;

use App\Models\Maquina;
use App\Models\Manguera;
use App\Models\Magueras_Maquinas;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User();
            $user->name = "Miguel Jiménez González";
            $user->email = "kroer17@hotmail.com";
            $user->state = 'On';
            $user->email_verified_at = now();
            $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
            $user->role = 'Admin';
            $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
            $user->name = "user";
            $user->email = "user@gmail.com";
            $user->state = 'On';
            $user->email_verified_at = now();
            $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
            $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
            $user->name = "Rafael";
            $user->email = "rsanchez.servilub@gmail.com";
            $user->state = 'On';
            $user->email_verified_at = now();
            $user->password = '$2y$10$lrTGNHXHRmNsfR0Pxiw0Je2n8uAg00y8hoMsOoXpoHwDIhFc1HYY2';
            $user->role = 'Admin';
            $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
            $user->name = "Arturo Zavaleta";
            $user->email = "arturo.zavaleta@thyssenkrupp-automotive.com";
            $user->state = 'On';
            $user->email_verified_at = now();
            $user->password = '$2y$10$X/ZL5qTxjQnfGWEtsfHhMO.BC0q2IR/UKQsY7t0OMUb7aluqsiDky';
            $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
            $user->name = "Juan Diego Gonzalez";
            $user->email = "juandiego.gonzalez@thyssenkrupp-automotive.com";
            $user->state = 'On';
            $user->email_verified_at = now();
            $user->password = '$2y$10$gYZJ6xJmJsRf9Q2qnP7go.lR0eB/.Mz0Ju0HTCOKKXSOxJpclgpXK';
            $user->remember_token = Str::random(10);
        $user->save();

//------------------------------------------MAQUINAS---------------------------------------
        $maquina = new Maquina();
        $maquina->no_maq = "M1694";
        $maquina->des_maq = "PRENSA 200 TONELADAS";
        $maquina->save();

        $maquina = new Maquina();
        $maquina->no_maq = "M1221";
        $maquina->des_maq = "PRENSA 2";
        $maquina->save();

        $maquina = new Maquina();
        $maquina->no_maq = "M1220";
        $maquina->des_maq = "PRENSA 1";
        $maquina->save();

        $maquina = new Maquina();
        $maquina->no_maq = "M1222";
        $maquina->des_maq = "PRENSA 3";
        $maquina->save();

//------------------------------------------MANGUERAS---------------------------------------

$manguera = new Manguera();
$manguera->descripcion = "AGUA";
$manguera->manguera = ' 1 1/2" ';
$manguera->fitting1 = "MCHR22";
$manguera->fitting2 = "MCHR22";
$manguera->longitud = 635;
$manguera->presion = 90;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AGUA";
$manguera->manguera = ' 1 1/2" ';
$manguera->fitting1 = "MCHR22";
$manguera->fitting2 = "MCHR22";
$manguera->longitud = 950;
$manguera->presion = 90;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AGUA";
$manguera->manguera = ' 1/2" ';
$manguera->fitting1 = "MCHR11";
$manguera->fitting2 = "MCHAN11";
$manguera->longitud = 950;
$manguera->presion = 276;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AGUA";
$manguera->manguera = ' 1/2" ';
$manguera->fitting1 = "MCHR11";
$manguera->fitting2 = "MCHR11";
$manguera->longitud = 890;
$manguera->presion = 276;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AGUA";
$manguera->manguera = ' 1/2" ';
$manguera->fitting1 = "MCHR11";
$manguera->fitting2 = "MCHR11";
$manguera->longitud = 980;
$manguera->presion = 276;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AGUA";
$manguera->manguera = ' 3/8" ';
$manguera->fitting1 = "MCHR19";
$manguera->fitting2 = "MCHR19";
$manguera->longitud = 1020;
$manguera->presion = 330;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AGUA";
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AIRE";
$manguera->manguera = ' 1/2" ';
$manguera->fitting1 = "MCHR18";
$manguera->fitting2 = "MCHR18";
$manguera->longitud = 1000;
$manguera->presion = 21;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AIRE";
$manguera->manguera = ' 1/2" ';
$manguera->fitting1 = "MCHR18";
$manguera->fitting2 = "MCHR18";
$manguera->longitud = 1060;
$manguera->presion = 21;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AIRE";
$manguera->manguera = ' 2" ';
$manguera->fitting1 = "MCHRJIC2NNPT2";
$manguera->fitting2 = "MCHRJIC2NNPT2";
$manguera->longitud = 790;
$manguera->presion = 0;
$manguera->save();

$manguera = new Manguera();
$manguera->descripcion = "AIRE";
$manguera->manguera = ' 3/8" ';
$manguera->fitting1 = "MCHR15";
$manguera->fitting2 = "MCHR15";
$manguera->longitud = 1010;
$manguera->presion = 330;
$manguera->save();


        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1" ';
        $manguera->fitting1 = "MCBR24";
        $manguera->fitting2 = "MCBAN24";
        $manguera->longitud = 1350;
        $manguera->presion = 0;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1" ';
        $manguera->fitting1 = "MCHR14";
        $manguera->fitting2 = "MCHR14";
        $manguera->longitud = 1900;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->manguera = ' 1" ';
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "MCHR16";
        $manguera->fitting2 = "MCHAN16";
        $manguera->longitud = 740;
        $manguera->presion = 165;
        $manguera->save();
//15
        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1" ';
        $manguera->fitting1 = "MCHR16";
        $manguera->fitting2 = "MCHR16";
        $manguera->longitud = 1500;
        $manguera->presion = 165;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->manguera = ' 1" ';
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "MCHR16";
        $manguera->fitting2 = "MCHR16";
        $manguera->longitud = 2080;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->manguera = ' 1" ';
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "MCHR16";
        $manguera->fitting2 = "MCHR16";
        $manguera->longitud = 2100;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1" ';
        $manguera->fitting1 = "MCHR20";
        $manguera->fitting2 = "MCHR20";
        $manguera->longitud = 1200;
        $manguera->presion = 165;
        $manguera->save();



        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHAC11";
        $manguera->longitud = 1300;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 740;
        $manguera->presion = 275;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 750;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1130;
        $manguera->presion = 275;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1170;
        $manguera->presion = 275;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1410;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1600;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 2000;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCMNPT11";
        $manguera->longitud = 940;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHR13";
        $manguera->longitud = 830;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR18";
        $manguera->fitting2 = "MCHR18";
        $manguera->longitud = 560;
        $manguera->presion = 21;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR18";
        $manguera->fitting2 = "MCHR18";
        $manguera->longitud = 640;
        $manguera->presion = 21;
        $manguera->save();



        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR12";
        $manguera->fitting2 = "MCHAN12";
        $manguera->longitud = 980;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR12";
        $manguera->fitting2 = "MCHAN12";
        $manguera->longitud = 1140;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR12";
        $manguera->fitting2 = "MCHR12";
        $manguera->longitud = 650;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR12";
        $manguera->fitting2 = "MCHR12";
        $manguera->longitud = 760;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHAN13";
        $manguera->longitud = 910;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHAN13";
        $manguera->longitud = 1050;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHR13";
        $manguera->longitud = 740;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHR13";
        $manguera->longitud = 1410;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHR13";
        $manguera->longitud = 1600;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHAN17";
        $manguera->longitud = 980;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHAN17";
        $manguera->longitud = 1100;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHR17";
        $manguera->longitud = 850;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHR17";
        $manguera->longitud = 940;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHR17";
        $manguera->longitud = 950;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHR17";
        $manguera->longitud = 960;
        $manguera->presion = 276;
        $manguera->save();



        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/8" ';
        $manguera->fitting1 = "MCHR15";
        $manguera->fitting2 = "MCHR15";
        $manguera->longitud = 980;
        $manguera->presion = 330;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/8" ';
        $manguera->fitting1 = "MCHR15";
        $manguera->fitting2 = "MCHR15";
        $manguera->longitud = 1410;
        $manguera->presion = 330;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/8" ';
        $manguera->fitting1 = "MCHR15";
        $manguera->fitting2 = "MCHR15";
        $manguera->longitud = 1600;
        $manguera->presion = 330;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/8" ';
        $manguera->fitting1 = "MCHR23";
        $manguera->fitting2 = "MCHR23";
        $manguera->longitud = 670;
        $manguera->presion = 330;
        $manguera->save();


        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 5/8" ';
        $manguera->fitting1 = "MCHR14";
        $manguera->fitting2 = "MCHAC14";
        $manguera->longitud = 1200;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 5/8" ';
        $manguera->fitting1 = "MCHR14";
        $manguera->fitting2 = "MCHAN14";
        $manguera->longitud = 390;
        $manguera->presion = 250;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 5/8" ';
        $manguera->fitting1 = "MCHR14";
        $manguera->fitting2 = "MCHAN14";
        $manguera->longitud = 920;
        $manguera->presion = 250;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 5/8" ';
        $manguera->fitting1 = "MCHR14";
        $manguera->fitting2 = "MCHAN14";
        $manguera->longitud = 1020;
        $manguera->presion = 250;
        $manguera->save();


        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->save();


        $manguera = new Manguera();
        $manguera->descripcion = "";
        $manguera->manguera = ' 1" ';
        $manguera->fitting1 = "MCHR16";
        $manguera->fitting2 = "MCHR16";
        $manguera->longitud = 1550;
        $manguera->presion = 345;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1060;
        $manguera->presion = 276;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR18";
        $manguera->fitting2 = "MCHR18";
        $manguera->longitud = 320;
        $manguera->presion = 21;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR18";
        $manguera->fitting2 = "MCHR18";
        $manguera->longitud = 520;
        $manguera->presion = 21;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR18";
        $manguera->fitting2 = "MCHR18";
        $manguera->longitud = 960;
        $manguera->presion = 21;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHR13";
        $manguera->longitud = 1050;
        $manguera->presion = 414;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "";
        $manguera->manguera = ' 3/8" ';
        $manguera->fitting1 = "MCHR15";
        $manguera->fitting2 = "MCHR15";
        $manguera->longitud = 800;
        $manguera->presion = 330;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "90° L22";
        $manguera->longitud = 1770;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "90° L28";
        $manguera->longitud = 1430;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "45° L22";
        $manguera->longitud = 900;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "45° L12";
        $manguera->longitud = 500;
        $manguera->presion = 0;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "90° S25";
        $manguera->longitud = 1120;
        $manguera->presion = 280;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA JIC 1/2";
        $manguera->fitting2 = "45° S16";
        $manguera->longitud = 650;
        $manguera->presion = 0;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA L13";
        $manguera->fitting2 = "RECTA L13";
        $manguera->longitud = 1250;
        $manguera->presion = 125;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA S20";
        $manguera->fitting2 = "BRIDA 45°";
        $manguera->longitud = 980;
        $manguera->presion = 280;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA S20";
        $manguera->fitting2 = "BRIDA 45°";
        $manguera->longitud = 1000;
        $manguera->presion = 280;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA S20";
        $manguera->fitting2 = "BRIDA S20";
        $manguera->longitud = 1000;
        $manguera->presion = 215;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA (Descarga Agua)";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "90 L42°";
        $manguera->longitud = 1560;
        $manguera->presion = 90;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA (Descarga Agua)";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA L35";
        $manguera->fitting2 = "RECTA L35";
        $manguera->longitud = 910;
        $manguera->presion = 11;
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA (Descarga Agua)";
        $manguera->manguera = '';
        $manguera->fitting1 = "RECTA L35";
        $manguera->fitting2 = "RECTA L35";
        $manguera->longitud = 950;
        $manguera->presion = 11;
        $manguera->save();

//---------------------------------------INSTALACIONES----------------------------------------

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 01";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 23;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 02";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 22;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 03";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 20;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 04";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 33;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 05";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 37;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 06";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 34;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 07";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 28;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 08";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 52;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 09";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 53;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 10";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 51;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 11";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 47;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 12";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 47;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 13";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 24;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 14";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 55;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 15";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 38;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 16";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 24;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 17";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 24;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 18";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 38;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 19";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 35;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 20";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 31;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 21";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 36;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 22";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 32;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 23";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 45;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 24";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 3;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 25";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 6;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 26";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 6;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 27";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 4;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 28";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 5;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 29";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 5;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 30";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 29;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 31";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 19;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 32";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 33";
        $instalacion->nota = "MANGUERA EN ALMACEN PENDIENTE DE CAMBIO";
        $instalacion->estado_compra = "Almacen";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 46;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 34";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 13;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 35";
        $instalacion->nota = "";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 18;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1220 - 36";
        $instalacion->nota = "REQUIERE  CAMBIO";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 3 ;
        $instalacion->manguera_id = 9;
        $instalacion->save();

///////////////////M1221--------------------------->
        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 01";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 21;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 02";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 39;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 03";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 25;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 04";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 25;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 05";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 39;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 06";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 15;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 07";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 25;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 08";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 48;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 09";
        $instalacion->nota = "NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Desmontar";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 10";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "PENDIENTE DE CAMBIO, MODIFICACIÓN EN CONEXIONES";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 10;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 11";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 9;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 14";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 8;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 15";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 42;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 16";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 11;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 17";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 30;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 18";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 26;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 19";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 2;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 20";
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 1;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 21";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 49;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 22";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 49;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 23";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 49;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 24";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 49;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1221 - 25";
        $instalacion->instalacion = \Carbon\Carbon::parse("18-10-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->nota = "PENDIENTE CAMBIO DE PROTECCIÓN, CONSIDERAR MEJORA EN PRÓXIMO CAMBIO";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 2 ;
        $instalacion->manguera_id = 12;
        $instalacion->save();

///////////////----------------------------------->M1222

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 01";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 16;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 02";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 16;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 03";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 04";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 05";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 06";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 07";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 08";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 17;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 09";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 10";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 11";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 54;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 12";
        $instalacion->nota = "MEJORA CONEXIÓN 2 A 90°";
        $instalacion->estado_compra = "Mejora";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 41;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 13";
        $instalacion->nota = "MEJORA CONEXIÓN 2 A 90°";
        $instalacion->estado_compra = "Mejora";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 14;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 14";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 27;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 15";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 44;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 16";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 40;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 17";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 50;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 18";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 43;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 21";
        $instalacion->nota = "NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Desmontar";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 7;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 22";
        $instalacion->nota = "NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Desmontar";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 7;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 23";
        $instalacion->nota = "NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Desmontar";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 62;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 24";
        $instalacion->nota = "NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Desmontar";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 62;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 25";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 7;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 26";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 7;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 27";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 62;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 28";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 62;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 29";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 62;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 30";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 56;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 31";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 57;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 32";
        $instalacion->nota = "";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 58;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 33";
        $instalacion->nota = "REQUIERE CAMBIO, NECESARIO DESMONTAR PARA TOMA DE DATOS";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 62;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 34";
        $instalacion->nota = "REQUIERE  CAMBIO";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 61;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 35";
        $instalacion->nota = "CAMBIO  (URGE TIENE FUGA Y ESTA LUIDA)";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 60;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1222 - 36";
        $instalacion->nota = "CAMBIO  (URGE TIENE FUGA Y ESTA LUIDA)";
        $instalacion->estado_compra = "Cambio";
        $instalacion->maquina_id = 4 ;
        $instalacion->manguera_id = 59;
        $instalacion->save();

/////--------------------------PRENSA 200 TONELADAS------------

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-09";
        $instalacion->instalacion = \Carbon\Carbon::parse("02-01-2019");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 63;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-01";
        $instalacion->instalacion = \Carbon\Carbon::parse("12-03-2020");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 64;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-13";
        $instalacion->instalacion = \Carbon\Carbon::parse("12-03-2020");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 65;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-04";
        $instalacion->instalacion = \Carbon\Carbon::parse("12-03-2020");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 66;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-07";
        $instalacion->instalacion = \Carbon\Carbon::parse("05-07-2016");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 66;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-08";
        $instalacion->instalacion = \Carbon\Carbon::parse("23-06-2018");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 67;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-03";
        $instalacion->instalacion = \Carbon\Carbon::parse("02-01-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 68;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-06";
        $instalacion->instalacion = \Carbon\Carbon::parse("02-01-2018");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 68;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-14";
        $instalacion->instalacion = \Carbon\Carbon::parse("23-06-2021");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 69;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-05";
        $instalacion->instalacion = \Carbon\Carbon::parse("23-06-2021");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 70;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-02";
        $instalacion->instalacion = \Carbon\Carbon::parse("23-06-2021");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 71;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-11";
        $instalacion->instalacion = \Carbon\Carbon::parse("23-06-2021");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 72;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-15";
        $instalacion->instalacion = \Carbon\Carbon::parse("02-01-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 73;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-12";
        $instalacion->instalacion = \Carbon\Carbon::parse("02-01-2022");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 74;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas();
        $instalacion->identificador = "M1694-10";
        $instalacion->instalacion = \Carbon\Carbon::parse("12-03-2020");
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->fechaCambio = Carbon::parse($instalacion->instalacion)->addYears($instalacion->cambio);
        $instalacion->maquina_id = 1 ;
        $instalacion->manguera_id = 75;
        $instalacion->save();






















    }
}
