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
                'name' => 'Apartemen',
            ],
            [
                'name' => 'Condotel',
            ],
            [
                'name' => 'Gedung',
            ],
            [
                'name' => 'Hotel',
            ],
            [
                'name' => 'Kantor',
            ],
            [
                'name' => 'Kavling',
            ],
            [
                'name' => 'Kios',
            ],
            [
                'name' => 'Komersial',
            ],
            [
                'name' => 'Kost',
            ],
            [
                'name' => 'Pabrik',
            ],
            [
                'name' => 'Ruang Usaha',
            ],
            [
                'name' => 'Ruko',
            ],
            [
                'name' => 'Rumah',
            ],
            [
                'name' => 'Sawah',
            ],
            [
                'name' => 'Tanah',
            ],
            [
                'name' => 'Villa',
            ],
        ]);
    }
}
