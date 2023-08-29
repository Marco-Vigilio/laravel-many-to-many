<?php

namespace Database\Seeders;

use App\Models\Admin\Technologies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            "php", "html", "css",
        ];
        
        foreach ($technologies as $technology) {
            $newTechnology = new Technologies();
            $newTechnology->type_technology = $technology;
            $newTechnology->save();
        }
    }
}
