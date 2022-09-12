<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();

        $provinces = [
            ['name' => 'Johor', 'code' => 'JHR'],
            ['name' => 'Kedah', 'code' => 'KDH'],
            ['name' => 'Kelantan', 'code' => 'KTN'],
            ['name' => 'Melaka', 'code' => 'MLK'],
            ['name' => 'Negeri Sembilan', 'code' => 'NSN'],
            ['name' => 'Pahang', 'code' => 'PHG'],
            ['name' => 'Pulau Pinang', 'code' => 'PNG'],
            ['name' => 'Perak', 'code' => 'PRK'],
            ['name' => 'Perlis', 'code' => 'PLS'],
            ['name' => 'Sabah', 'code' => 'SBH'],
            ['name' => 'Serawak', 'code' => 'SWK'],
            ['name' => 'Selangor', 'code' => 'SGR'],
            ['name' => 'Terengganu', 'code' => 'TRG'],
            ['name' => 'Kuala Lumpur', 'code' => 'KUL'],
            ['name' => 'Labuan', 'code' => 'LBN'],
            ['name' => 'Putrajaya', 'code' => 'PJY'],
        ];

        foreach ($provinces as $key => $value) {
            Province::create($value);
        }
    }
}
