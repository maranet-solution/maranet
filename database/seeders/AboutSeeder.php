<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if with id 1 exists return
        if(\App\Models\About::where('id', 1)->exists()) return;

        $about = new \App\Models\About();
            // "mission" => "To provide quality internet services",
            // "vision" => "To be a leading internet provider",
            // "stategy" => "To be a reliable and trustworthy internet provider"

        $about -> mission = "To provide quality internet services";
        $about -> vission = "To be a leading internet provider";
        $about -> strategy = "To be a reliable and trustworthy internet provider";
        $about ->save();
    }
}
