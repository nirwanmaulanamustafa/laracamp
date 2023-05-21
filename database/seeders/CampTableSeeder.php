<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
            'title' => 'Premium',
            'slug' => 'premium',
            'price' => 200,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
            'title' => 'Basic',
            'slug' => 'basic',
            'price' => 140,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            
        ];

        // CARA PERTAMA UNTUK MENG-INSERT TABLE
        // foreach ($camps as $key => $camp) {
        //     Camps::create($camp);
        // }

        // CARA KE DUA UNTUK MENG-INSERT TABLE
        Camps::insert($camps);

    }
}
