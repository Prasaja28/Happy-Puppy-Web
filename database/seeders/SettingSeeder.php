<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'key' => 'url_facebook',
            'value' => 'https://facebook.com',
        ]);

        Settings::create([
            'key' => 'url_instagram',
            'value' => 'https://instagram.com',
        ]);

        Settings::create([
            'key' => 'url_apple',
            'value' => 'https://apple.com',
        ]);
        Settings::create([
            'key' => 'url_whatsapp',
            'value' => 'https://whatsapp.com',
        ]);

        Settings::create([
            'key' => 'url_google_play',
            'value' => 'https://google_play.com',
        ]);

        Settings::create([
            'key' => 'url_twitter',
            'value' => 'https://twitter.com',
        ]);
    }
}
