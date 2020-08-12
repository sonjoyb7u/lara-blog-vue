<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 20) as $index) {
            $title = $faker->unique()->sentence;
            Post::create([
                'user_id' => rand(1, 3),
                'category_id' => rand(1, 10),
                'title' => $title,
                'slug' => $this->slugGenerate($title),
                'desc' => $faker->realText(),
                'image' => 'default.png',
                'status' => $this->getRandomStatus(),
            ]);
        }

    }

    public function getRandomStatus() {
        $status = ['draft', 'published', 'private'];
        return $status[array_rand($status)];
    }

    public function slugGenerate($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, '-');
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'N-A';
        }

        return $text;
    }

}
