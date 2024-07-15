<?php

namespace App\Services\Settings;

use App\Models\Setting;

class CompanyService
{
    public function update($data)
    {
        $settings = [
            'company_name' => $data->company_name,
            'company_email' => $data->company_email,
            'company_phone' => $data->company_phone,
            'company_address' => $data->company_address,
        ];

        foreach ($settings as $key => $value) {
            Setting::where('name', $key)->update(['value' => $value]);
        }

        return true;
    }
}
