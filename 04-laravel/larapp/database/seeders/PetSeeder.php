<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pet = new Pet;
        $pet->name = 'Pocholo';
        $pet->photo = "Jeremias Springfield";
        $pet->kind = "Dog";
        $pet->weight = 10;
        $pet->age = 4;
        $pet->breed = 'Pug';
        $pet->location = 'Manizales';
        
        $pet->save();
    }
}
