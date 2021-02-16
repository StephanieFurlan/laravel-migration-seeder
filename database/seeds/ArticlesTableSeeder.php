<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $articles = [
        //     [
        //         'title' => 'The hidden world of AI',
        //         'subtitle' => 'An AI Surver',
        //         'author' => 'Lilli Pinki',
        //         'content' => 'A long long article',
        //         'publication_date' => "2015-10-28 19:18:44",
        //         'stars' => 3,
        //     ]
        // ];
        //

        // foreach($articles as $article) {
        //     $newArticle = new Article();
        //     $newArticle->title = $article['title'];
        //     $newArticle->subtitle = $article['subtitle'];
        //     $newArticle->author = $article['author'];
        //     $newArticle->content = $article['content'];
        //     $newArticle->publication_date = $article['publication_date'];
        //     $newArticle->stars = $article['stars'];
        //     $newArticle->save();
        // }

        for ($i = 0; $i < 10; $i++) {
            $newArticle = new Article();
            $newArticle->title = $faker->realText($maxNbChars = 10, $indexSize = 2);
            $newArticle->subtitle = $faker->realText($maxNbChars = 20, $indexSize = 2);
            $newArticle->author = $faker->name();
            $newArticle->content = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $newArticle->publication_date = $faker->dateTime($max = 'now')->format('Y-m-d H:i:s');
            $newArticle->stars = $faker->numberBetween($min = 1, $max = 5);
            $newArticle->save();
        }
    }
}
