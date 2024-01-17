<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents(__DIR__ . "/data/characters.json");
        $dataArray = json_decode($data, true);
        foreach ($dataArray as $character) {
            $new_character = new Character();
            $new_character->name = $character["name"];
            $new_character->description = $character["description"];
            $new_character->type_id = $character["type_id"];
            $new_character->attack = $character["attack"];
            $new_character->defence = $character["defence"];
            $new_character->speed = $character["speed"];
            $new_character->life = $character["life"];
            $new_character->image = CharacterSeeder::storeimage($character['image'], $character['name']);
            $new_character->save();

        }
        
    }
    public static function storeimage($img, $name)
    {
        $url = $img;
        $contents = file_get_contents($url);
        $name = Str::slug($name, '-') . '.jpg';
        $path = 'images/' . $name;
        Storage::put('images/' . $name, $contents);
        return $path;
    }
}
