<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents(__DIR__ . "/data/items.json");
        $dataArray = json_decode($data, true);
        foreach ($dataArray as $item) {
            $new_item = new Item();
            $new_item->name = $item["name"];
            $new_item->description = $item["description"];
            $new_item->slug = $item["slug"];
            $new_item->category = $item["category"];
            $new_item->type = $item["type"];
            $new_item->weight = $item["weight"];
            $new_item->cost = $item["cost"];
            $new_item->damage_dice = $item["damage_dice"];
            $new_item->image = ItemSeeder::storeimage($item['image'], $item['name']);
            $new_item->save();

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
