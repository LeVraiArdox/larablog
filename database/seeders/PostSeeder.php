<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Mon article 1',
            'content' => 'Contenu de l\'article 1',
            'thumbnail' => 'https://github.com/AxOS-project/Sleex/raw/main/screenshots/sleex1.png',
            'views' => 0
        ]);
        Post::create([
            'title' => 'Mon super article 2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies. Nullam nec purus nec nunc tincidunt ultricies.',
            'thumbnail' => 'https://github.com/AxOS-project/Sleex/raw/main/screenshots/sleex2.png',
            'views' => 0
        ]);

        Post::factory()->count(5)->create();
    }
}
