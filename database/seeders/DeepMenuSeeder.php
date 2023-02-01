<?php

namespace Database\Seeders;

use App\Models\DeepMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeepMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no = 1;
        $menuDestinations = [
            'Malaysia',
            'Singapore',
            'Indonesia',
            'Japan',
            'Korea',
        ];

        foreach ($menuDestinations as $item) {
            DeepMenu::create([
                'sub_menu_id' => 4,
                'name'    => $item,
                'slug'    => Str::slug($item),
                'order'   => $no++
            ]);
        }
    }
}
