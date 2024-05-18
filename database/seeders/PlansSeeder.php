<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Plans;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Standard Plan',
                'price' => 2000,
                'image'=>"/images/pricing-icon1.png",
                'duration' => '1 month',
                "description" =>"
                    - Upto 5 users Hd steaming
                    - Upto 2 gaming 
                    - 24/7 support
                "   
            ],
            [
                'name' => 'Premium Plan',
                'price' => 4000,
                'image'=>"/images/pricing-icon2.png",
                'duration' => '1 month',
                "description" =>"
                    - Upto 10 users Hd steaming
                    - Upto 5 gaming 
                    - 24/7 support
                "   
            ],
            [
                'name' => 'Business Plan',
                'image'=>"/images/pricing-icon3.png",
                'price' => 6000,
                'duration' => '1 month',
                "description" =>"
                    - Upto 20 users Hd steaming
                    - Upto 10 gaming 
                    - 24/7 support
                "
            ],
        ];

        foreach ($plans as $plan) {
            Plans::create($plan);
        }
    }
}
