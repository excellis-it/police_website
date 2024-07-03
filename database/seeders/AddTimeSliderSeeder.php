<?php

namespace Database\Seeders;

use App\Models\SliderTime;
use Illuminate\Database\Seeder;

class AddTimeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SliderTime::create([
            'name' => 'First Slider',
            'duration' => '5'
        ]);

       SliderTime::create([
            'name' => 'Second Slider',
            'duration' => '5'
        ]);
    }
}
