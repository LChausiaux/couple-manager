<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Dish;
use App\Models\Family;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder {

    protected $table = 'dishes';

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $family = Family::factory()->create([
            'id' => env('FAMILY_ID'),
        ]);
        $menu = Menu::factory()->create([
            'family_id' => $family->id,
            'week' => date('W'),
            'year' => date('Y'),
        ]);
        $dishes = Dish::factory(30)->create([
            'family_id' => $family->id,
        ])->keyBy('id');
        Day::factory(7)->create([
            'parent_id' => $menu->id,
            'parent_type' => Menu::class,
            'lunch_id' => $dishes->get(rand(0, $dishes->count())),
            'lunch_type' => Dish::class,
            'dinner_id' => $dishes->get(rand(0, $dishes->count())),
            'dinner_type' => Dish::class,
        ])->each(function ($item, $key) {
            $item->position = $key + 1;
            $item->save();
        });
    }
}
