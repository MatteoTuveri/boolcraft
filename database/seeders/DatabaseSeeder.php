<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $data = file_get_contents(__DIR__ . "/data/users.json");
        $dataArray = json_decode($data, true);
        foreach ($dataArray as $user) {
            User::factory()->create([
                'name' => $user["name"],
                'email' => $user["email"],
                'nickname' => $user['nickname'],
                'password' => $user['password']
            ]);
        }

         $this->call([
            CharacterSeeder::class,
            ItemSeeder::class,
            TypeSeeder::class
        ]);
    }
}
