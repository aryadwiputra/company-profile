<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name' => 'company_name',
                'value' => 'Company Profile',
                'description' => 'Digital company profile industry and business.',
            ],
            [
                'name' => 'company_email',
                'value' => 'aryaadwptr@gmail.com',
                'description' => 'Company email address.',
            ],
            [
                'name' => 'company_phone',
                'value' => '0123-456-7890',
                'description' => 'Company phone number.',
            ],
            [
                'name' => 'company_address',
                'value' => '123 Main St. Anytown, USA 12345',
                'description' => 'Company address.',
            ],
            [
                'name' => 'company_logo',
                'value' => 'company_logo.png',
                'description' => 'Company logo.',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
