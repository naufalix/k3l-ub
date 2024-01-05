<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\User;
use File;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "name" => "Naufal Ulinnuha",  
            "username" => "naufal",  
            "password" => bcrypt('admin')
        ]);

        $news = json_decode(File::get("database/data/news.json"));
        foreach ($news as $key => $value) {
            News::create([
                "title" => $value->title,
                "slug" => $value->slug,
                "body" => $value->body,
                "image" => $value->image,
            ]);
        }
    }
}
