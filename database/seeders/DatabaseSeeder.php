<?php

namespace Database\Seeders;

use App\Models\Maquina;
use App\Models\Manguera;
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
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "Recta";
        $manguera->fitting2 = "90° L28";
        $manguera->longitud = "1430";
        $manguera->presion = "215";
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "Recta S20";
        $manguera->fitting2 = "BRIDA 45°";
        $manguera->longitud = "1000";
        $manguera->presion = "280";
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();

        $manguera = new Manguera();
        $manguera->descripcion = "MANGUERA HIDRÁULICA";
        $manguera->fitting1 = "Recta S20";
        $manguera->fitting2 = "BRIDA 45°";
        $manguera->longitud = "1000";
        $manguera->presion = "280";
        $manguera->proteccion = "No";
        $manguera->Extra = "pendiente";
        $manguera->save();
    }
}
