<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\Contact;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        About::factory(1)->create();
        Slider::factory(1)->create();
        SiteSetting::factory(1)->create([
            'title'=>"Huzur Design",
            'description'=>"A fancy furniture shop.",
            'keywords'=>'furniture,desk,table'
        ]);
        Contact::factory(1)->create();

    }
}
