<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no = 1;
        $menus = [
            'Destinations',
            'Umrah',
            'Special Interest',
        ];

        foreach ($menus as $item) {
            Menu::create([
                'name'  => $item,
                'slug'  => Str::slug($item),
                'order' => $no++
            ]);
        }
    }
}
