<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $i;
        $userId = User::pluck('id')->toArray();

        for($i = 1; $i <= 5; $i++){
            $posts [] = [
                'title' => $faker->title,
                'excerpt' => $faker->text,
                'content' => $faker->text,
                'image' => $faker->image,
                'author_id' => collect($userId)->random()
            ];
        }
        DB::table("posts")->insert($posts);
    }
}