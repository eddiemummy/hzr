<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Event\Telemetry\System;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::factory(1)->create([
            'title'=>"Huzur Design",
            'description'=>"A fancy furniture shop.",
            'keywords'=>'furniture,desk,table',
            'facebook' => "www.facebook.com",
            'twitter' => "www.twitter.com",
            'instagram' => "www.instagram.com",
            'youtube' => "www.youtube.com",
            'tiktok' => "www.tiktok.com"
        ]);
    }
}
