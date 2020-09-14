<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newPost = new Post();

            $newPost->user_id = 1;
            $newPost->title = $faker->text(50);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->body = $faker->paragraphs(5, true);

            $newPost->save();
        }
    }
}
