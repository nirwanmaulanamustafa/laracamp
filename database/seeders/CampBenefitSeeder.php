<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;
class CampBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campsbenefit = [
            [
                'camp_id' => 1,
                'name' => 'Figma Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Figma Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Figma Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Figma Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Figma Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Figma Kit'
            ],
        ];
        CampBenefit::insert($campsbenefit);
    }
}
