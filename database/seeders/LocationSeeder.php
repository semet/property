<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::factory()
            ->createMany([
                [
                    'name' => 'Alam Sutera',
                ],
                [
                    'name' => 'Ambengan'
                ],
                [
                    'name' => 'Ambon'
                ],
                [
                    'name' => 'Ancol'
                ],
                [
                    'name' => 'Balaraja'
                ],
                [
                    'name' => 'Bali'
                ],
                [
                    'name' => 'Bambu Apus'
                ],
                [
                    'name' => 'Bandar Lampung'
                ],
                [
                    'name' => 'Bandung'
                ],
                [
                    'name' => 'Bandung Kota'
                ],
                [
                    'name' => 'Bangka'
                ],
                [
                    'name' => 'Bangun Cipta Sarana'
                ],
                [
                    'name' => 'banjar'
                ],
                [
                    'name' => 'Bantar Gebang'
                ],
                [
                    'name' => 'Banten'
                ],
                [
                    'name' => 'Batam'
                ],
                [
                    'name' => 'Beji'
                ],
                [
                    'name' => 'Bekasi'
                ],
                [
                    'name' => 'Bekasi Barat'
                ],
                [
                    'name' => 'Bekasi Selatan'
                ],
                [
                    'name' => 'Bekasi Timur'
                ],
                [
                    'name' => 'Bekasi Utara'
                ],
                [
                    'name' => 'Bintaro'
                ],
                [
                    'name' => 'Bogor'
                ],
                [
                    'name' => 'Bogor Utara'
                ],
                [
                    'name' => ''
                ],
            ]);
    }
}
