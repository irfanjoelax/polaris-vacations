<?php

namespace Database\Seeders;

use App\Models\SubMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubMenuSeeder extends Seeder
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
            'Turkiye',
            'Middle East',
            'Europe',
            'Asia',
        ];

        foreach ($menuDestinations as $item) {
            SubMenu::create([
                'menu_id' => 1,
                'name'    => $item,
                'slug'    => Str::slug($item),
                'order'   => $no++
            ]);
        }

        $menuInterest = [
            'Cycling',
            'Honeymoon',
            'Wellness',
        ];

        foreach ($menuInterest as $item) {
            SubMenu::create([
                'menu_id' => 3,
                'name'    => $item,
                'slug'    => Str::slug($item),
                'order'   => $no++
            ]);
        }
    }
}
