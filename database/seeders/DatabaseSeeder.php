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

        $maquina = new Maquina();
        $maquina->no_maq = "M1694";
        $maquina->des_maq = "PRENSA 200 TONELADAS";
        $maquina->save();

        $manguera = new Manguera();
        $manguera->identificador = "01";
        $manguera->manguera = "";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "Recta";
        $manguera->fitting2 = "90° L28";
        $manguera->longitud = 1430;
        $manguera->presion = 215;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "02";
        $manguera->manguera = "";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "Recta S20";
        $manguera->fitting2 = "BRIDA 45°";
        $manguera->longitud = 1000;
        $manguera->presion = 280;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "03";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA JIC 1/2";
        $manguera->fitting2 = "45° S16";
        $manguera->longitud = 650;
        $manguera->presion = 0;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "04";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "45° L12";
        $manguera->longitud = 500;
        $manguera->presion = 0;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "05";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA S20";
        $manguera->fitting2 = "BRIDA 45°";
        $manguera->longitud = 980;
        $manguera->presion = 0;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "06";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA JIC 1/2";
        $manguera->fitting2 = "45° S16";
        $manguera->longitud = 650;
        $manguera->presion = 0;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "07";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "45° L12";
        $manguera->longitud = 500;
        $manguera->presion = 0;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "08";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "90° S25";
        $manguera->longitud = 1120;
        $manguera->presion = 280;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "09";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "90° L22";
        $manguera->longitud = 1770;
        $manguera->presion = 215;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "10";
        $manguera->descripcion = "MANGUERA HIDRÁULICA (Descarga Agua)";
        $manguera->fitting1 = "RECTA L35";
        $manguera->fitting2 = "RECTA L35";
        $manguera->longitud = 950;
        $manguera->presion = 11;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "11";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA S20";
        $manguera->fitting2 = "RECTA S20";
        $manguera->longitud = 1000;
        $manguera->presion = 215;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "12";
        $manguera->descripcion = "MANGUERA HIDRÁULICA (Descarga Agua)";
        $manguera->fitting1 = "RECTA L35";
        $manguera->fitting2 = "RECTA L35";
        $manguera->longitud = 910;
        $manguera->presion = 11;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "13";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "45° L12";
        $manguera->longitud = 900;
        $manguera->presion = 215;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "14";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "90° L35";
        $manguera->longitud = 1250;
        $manguera->presion = 125;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "15";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "RECTA";
        $manguera->fitting2 = "45° L42";
        $manguera->longitud = 1560;
        $manguera->presion = 90;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-01";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '12-03-2020')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "En buen estado";
        $instalacion->precio = 2895.58;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 1;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-02";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '23-06-2023')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "En buen estado";
        $instalacion->precio = 3779.88;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 2;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-03";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '02-01-2020')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "Require cambio por desgaste";
        $instalacion->precio = 828.23;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 3;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-04";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '12-03-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "En buen estado";
        $instalacion->precio = 563.68;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 4;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-05";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '23-06-2021')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "Cambio por desgaste exterior, se notan las cuerdas";
        $instalacion->precio = 3264.91;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 5;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-06";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '02-01-2018')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "En buen estado";
        $instalacion->precio = 918.00;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 6;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-07";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '05-07-2016')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "En buen estado";
        $instalacion->precio = 563.68;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 7;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-08";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '23-06-2018')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 2877.29;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 8;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-09";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '02-01-2019')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 1424.16;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 9;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-10";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '12-03-2020')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 2551.38;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 10;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-11";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '23-06-2021')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 1740.69;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 11;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-12";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '02-01-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 2538.00;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 12;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-13";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '12-03-2020')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 1376.26;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 13;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-14";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '23-06-2021')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 3783.52;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 14;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1694-15";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '02-01-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        $instalacion->precio = 8098.51;
        $instalacion->maquina_id = 1;
        $instalacion->manguera_id = 15;
        $instalacion->save();

//M1220 PRENSA 1----------------------------------------------------------------------------

        $maquina = new Maquina();
        $maquina->no_maq = "M1220";
        $maquina->des_maq = "PRENSA 1";
        $maquina->save();

        $manguera = new Manguera();
        $manguera->identificador = "02";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1130;
        $manguera->presion = 275;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "13";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1410;
        $manguera->presion = 276;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "14";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1" ';
        $manguera->fitting1 = "MCHR16";
        $manguera->fitting2 = "MCHR16";
        $manguera->longitud = 1550;
        $manguera->presion = 345;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "16";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1410;
        $manguera->presion = 276;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "17";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 1410;
        $manguera->presion = 276;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "18";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/4" ';
        $manguera->fitting1 = "MCHR13";
        $manguera->fitting2 = "MCHR13";
        $manguera->longitud = 1410;
        $manguera->presion = 414;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "23";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHR17";
        $manguera->longitud = 960;
        $manguera->presion = 276;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "24";
        $manguera->descripcion = "AGUA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 950;
        $manguera->presion = 276;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "33";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/8" ';
        $manguera->fitting1 = "MCHR15";
        $manguera->fitting2 = "MCHR15";
        $manguera->longitud = 980;
        $manguera->presion = 330;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 02";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 16;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 13";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 17;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 14";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 18;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 16";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 19;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 17";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 20;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 18";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 21;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 23";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 22;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 24";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 23;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1220 - 33";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 2;
        $instalacion->manguera_id = 24;
        $instalacion->save();


//M1221 PRENSA 2----------------------------------------------------------------------------
        $maquina = new Maquina();
        $maquina->no_maq = "M1221";
        $maquina->des_maq = "PRENSA 2";
        $maquina->save();

        $manguera = new Manguera();
        $manguera->identificador = "15";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 3/4" ';
        $manguera->fitting1 = "MCHR17";
        $manguera->fitting2 = "MCHR17";
        $manguera->longitud = 850;
        $manguera->presion = 276;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "17";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR18";
        $manguera->fitting2 = "MCHR18";
        $manguera->longitud = 640;
        $manguera->presion = 20;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->identificador = "18";
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->manguera = ' 1/2" ';
        $manguera->fitting1 = "MCHR11";
        $manguera->fitting2 = "MCHR11";
        $manguera->longitud = 2000;
        $manguera->presion = 276;
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1221 - 15";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 3;
        $instalacion->manguera_id = 25;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1221 - 17";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 3;
        $instalacion->manguera_id = 26;
        $instalacion->save();

        $instalacion = new Magueras_Maquinas;
        $instalacion->identificador = "M1221 - 18";
        $instalacion->instalacion = Carbon::createFromFormat('d-m-Y', '18-10-2022')->toDateTimeString();
        $instalacion->chequeo = 4;
        $instalacion->cambio = 4;
        $instalacion->estado_compra = "Instalada";
        $instalacion->nota = "";
        // $instalacion->precio = 0;
        $instalacion->maquina_id = 3;
        $instalacion->manguera_id = 27;
        $instalacion->save();


    }
}
