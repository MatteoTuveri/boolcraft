<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents(__DIR__ . "/data/types.json");
        $dataArray = json_decode($data, true);
        foreach ($dataArray as $type) {
            $new_type = new Type();
            $new_type->name = $type["name"];
            $new_type->description = $type["desc"];
            $new_type->image = TypeSeeder::storeimage($type['image'], $type['name']);
            $new_type->save();

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
