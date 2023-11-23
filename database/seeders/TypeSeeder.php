<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::factory()->createMany([
            [
                'slug' => 'apartemen',
                'name' => 'Apartemen',
            ],
            [
                'slug' => 'condotel',
                'name' => 'Condotel',
            ],
            [
                'slug' => 'gedung',
                'name' => 'Gedung',
            ],
            [
                'slug' => 'hotel',
                'name' => 'Hotel',
            ],
            [
                'slug' => 'kantor',
                'name' => 'Kantor',
            ],
            [
                'slug' => 'kavling',
                'name' => 'Kavling',
            ],
            [
                'slug' => 'kios',
                'name' => 'Kios',
            ],
            [
                'slug' => 'komersial',
                'name' => 'Komersial',
            ],
            [
                'slug' => 'kost',
                'name' => 'Kost',
            ],
            [
                'slug' => 'pabrik',
                'name' => 'Pabrik',
            ],
            [
                'slug' => 'ruang-usaha',
                'name' => 'Ruang Usaha',
            ],
            [
                'slug' => 'ruko',
                'name' => 'Ruko',
            ],
            [
                'slug' => 'rumah',
                'name' => 'Rumah',
            ],
            [
                'slug' => 'sawah',
                'name' => 'Sawah',
            ],
            [
                'slug' => 'tanah',
                'name' => 'Tanah',
            ],
            [
                'slug' => 'villa',
                'name' => 'Villa',
            ],
        ]);
    }
}
