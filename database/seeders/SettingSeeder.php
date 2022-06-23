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
        Settings::truncate();
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
        Settings::create([
            'key' => 'url_tiktok',
            'value' => 'https://tiktok.com',
        ]);
        Settings::create([
            'key' => 'url_youtube',
            'value' => 'https://youtube.com',
        ]);
        Settings::create([
            'key' => 'url_linkedin',
            'value' => 'https://linkedin.com',
        ]);
        Settings::create([
            'key' => 'banner_home',
            'value' => 'https://happypuppy.id/images/banner-home.jpg',
        ]);
        Settings::create([
            'key' => 'banner_karir',
            'value' => 'https://happypuppy.id/images/banner-home-mobile.jpg',
        ]);
        Settings::create([
            'key' => 'banner_waralaba',
            'value' => 'https://happypuppy.id/images/banner-home.jpg',
        ]);
        Settings::create([
            'key' => 'banner_profile',
            'value' => 'https://happypuppy.id/images/banner-home-mobile.jpg',
        ]);
        Settings::create([
            'key' => 'banner_lokasi',
            'value' => 'https://happypuppy.id/images/banner-home-mobile.jpg',
        ]);
        Settings::create([
            'key' => 'banner_berita',
            'value' => 'https://happypuppy.id/images/banner-home-mobile.jpg',
        ]);
        Settings::create([
            'key' => 'banner_kontak',
            'value' => 'https://happypuppy.id/images/banner-home-mobile.jpg',
        ]);
    }
}
