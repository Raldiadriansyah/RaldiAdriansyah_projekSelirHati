<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $idadmin = \App\Models\User::pluck('id')->toArray();

    
    \App\Models\Menu::all()->each(function ($menu) use ($idadmin) {
        $menu->update([
            'admin_id' => fake()->randomElement($idadmin),
        ]);
    });
    }
}
