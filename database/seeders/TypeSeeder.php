<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = file_get_contents(__DIR__ . '/data/types.json');
        $content = json_decode($data, true);

        foreach($content as $itemData){
            Type::create([
                'name' => $itemData['name'],
                'description' => $itemData['desc'],
            ]);
    }
}
}