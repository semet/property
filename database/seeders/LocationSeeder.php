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
                    'slug' => 'alam-sutera',
                    'name' => 'Alam Sutera',
                ],
                [
                    'slug' => 'ambengan',
                    'name' => 'Ambengan'
                ],
                [
                    'slug' => 'ambon',
                    'name' => 'Ambon'
                ],
                [
                    'slug' => 'ancol',
                    'name' => 'Ancol'
                ],
                [
                    'slug' => 'balaraja',
                    'name' => 'Balaraja'
                ],
                [
                    'slug' => 'bali',
                    'name' => 'Bali'
                ],
                [
                    'slug' => 'bambu-apus',
                    'name' => 'Bambu Apus'
                ],
                [
                    'slug' => 'bandar-lampung',
                    'name' => 'Bandar Lampung'
                ],
                [
                    'slug' => 'bandung',
                    'name' => 'Bandung'
                ],
                [
                    'slug' => 'bandung-kota',
                    'name' => 'Bandung Kota'
                ],
                [
                    'slug' => 'bangka',
                    'name' => 'Bangka'
                ],
                [
                    'slug' => 'bangun-cipta-sarana',
                    'name' => 'Bangun Cipta Sarana'
                ],
                [
                    'slug' => 'banjar',
                    'name' => 'Banjar'
                ],
                [
                    'slug' => 'bantar-gebang',
                    'name' => 'Bantar Gebang'
                ],
                [
                    'slug' => 'banten',
                    'name' => 'Banten'
                ],
                [
                    'slug' => 'batam',
                    'name' => 'Batam'
                ],
                [
                    'slug' => 'beji',
                    'name' => 'Beji'
                ],
                [
                    'slug' => 'bekasi',
                    'name' => 'Bekasi'
                ],
                [
                    'slug' => 'bekasi-barat',
                    'name' => 'Bekasi Barat'
                ],
                [
                    'slug' => 'bekasi-selatan',
                    'name' => 'Bekasi Selatan'
                ],
                [
                    'slug' => 'bekasi-timur',
                    'name' => 'Bekasi Timur'
                ],
                [
                    'slug' => 'bekasi-utara',
                    'name' => 'Bekasi Utara'
                ],
                [
                    'slug' => 'bintaro',
                    'name' => 'Bintaro'
                ],
                [
                    'slug' => 'bogor',
                    'name' => 'Bogor'
                ],
                [
                    'slug' => 'bogor-utara',
                    'name' => 'Bogor Utara'
                ],
            ]);
    }
}
