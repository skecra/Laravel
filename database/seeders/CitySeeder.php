<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gradovi = [
            ['name' => 'Podgorica', 'population' => '155000', 'country_id' => 1],
            ['name' => 'Danilovgrad', 'population' => '15000', 'country_id' => 1],

        ];
        foreach ($gradovi as $grad){
            City::create([
                'name' => $grad['name'],
                'population' => $grad['population'],
                'country_id' => $grad['country_id']
            ]);
        }
    }
}
