<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use App\User;

use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // all random number, oppure 
        // riprendere con all
        $category_ids = Category::pluck('id')->toArray();
        // $tag_ids = Tag::pluck('id')->toArray(); 
        $user_ids = User::pluck('id')->toArray();
        
        for ($i= 0 ; $i <50 ; $i++){
            $newPost = new Post();
            $newPost->title = $faker->sentence(4);
            $newPost->user_id = Arr::random($user_ids);
            $newPost->post_date = $faker->dateTime();
            $newPost->post_content = $faker->paragraphs(6, true);
            $newPost->image_url = $faker->imageUrl(1000, 400, $newPost->title , true, $newPost->author);

            $newPost->category_id = Arr::random($category_ids);

            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
    }
 }
}