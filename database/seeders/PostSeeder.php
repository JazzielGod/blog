<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();

        $post->title = 'My first post';
        $post->content = 'This is my first post content';
        $post->category = 'General';
        $post->published_at = now();
        
        $post->save();

        $post = new Post();

        $post->title = 'My second post';
        $post->content = 'This is my second post content';
        $post->category = 'General';
        $post->published_at = now();

        $post->save();
    }
}
