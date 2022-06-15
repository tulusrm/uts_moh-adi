<?php

namespace Database\Seeders;
use App\models\Kedai;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KedaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'kedai' => 'hjgjgjg'
        ];
        Kedai::create($data);

    }
}
