<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Rdv , Info, Region , Departement };
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  
        // Region::factory()
        //         ->has(Departement::factory()->count(4))
        //         ->count(10)
        //         ->create();
        // for ($i = 1; $i < 11; $i++) {
        //     DB::table('regions')->insert(['name' => 'Dakar ' . $i]);
        // }
        // for ($i = 1; $i < 21; $i++) {
        //     DB::table('departements')->insert(['name' => 'Pikine ' . $i, 'region_id' => rand(1, 10)]);
        // }
        // for ($i = 1; $i < 21; $i++) {
        //     DB::table('centres')->insert(['name' => 'Hopital Dominique ' . $i, 'departement_id' => rand(1, 20)]);
        // }
        // for ($i = 1; $i < 21; $i++) {
        //     DB::table('vaccins')->insert(['name' => 'Covax ' . $i, 'centre_id' => rand(1, 20)]);
        // }

        DB::table('users')->insert([
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password')
        ]);
        DB::table('infos')->insert([
            [
                'id' => 1,
                'image' => "vaccin-3.jfif",
                'vaccin' => 'AstraZeneca',
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ut suscipit dignissimos sed, nostrum sequi quae nihil.",
                'centre' => 'Hopital Fann de dakar',
                'jours' => 'Lundi - Mercredi',
                'heures' => '08h - 13h'
                
            ],
            [
                'id' => 2,
                'image' => "vaccin-3.jfif",
                'vaccin' => 'AstraZeneca',
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ut suscipit dignissimos sed, nostrum sequi quae nihil.",
                'centre' => 'Hopital DALAAL DIAM DE GUEDIAWAYE',
                'jours' => 'Lundi - Mercredi',
                'heures' => '08h - 13h'
            ],
            [
                'id' => 3,
                'image' => "moderna.jfif",
                'vaccin' => 'Moderna',
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ut suscipit dignissimos sed, nostrum sequi quae nihil.",
                'centre' => 'Hopital Fann de dakar',
                'jours' => 'Lundi - Mercredi',
                'heures' => '08h - 13h'
            ],

            [
                'id' => 4,
                'image' => "pfizer.jfif",
                'vaccin' => 'Moderna',
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ut suscipit dignissimos sed, nostrum sequi quae nihil.",
                'centre' => 'Hopital Fann de dakar',
                'jours' => 'Lundi - Mercredi',
                'heures' => '08h - 13h'
            ],
            [
                'id' => 5,
                'image' => "pfizer.jfif",
                'vaccin' => 'Moderna',
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ut suscipit dignissimos sed, nostrum sequi quae nihil.",
                'centre' => 'Hopital Fann de dakar',
                'jours' => 'Lundi - Mercredi',
                'heures' => '08h - 13h'
            ],
        ]);
    }
}
