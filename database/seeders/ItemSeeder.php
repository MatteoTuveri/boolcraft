<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $json = file_get_contents(__DIR__.'/data/items.json');
        $items = json_decode($json, true);

        foreach ($items as $itemData) {

            Item::create([
                'name' => $itemData['name'],
                'slug' => $itemData['slug'],
                'category' => $itemData['category'],
                'type' => $itemData['type'],
                'weight' => $itemData['weight'],
                'cost' => $itemData['cost'],
            ]);
        }

    }
}
