<?php

use Illuminate\Database\Seeder;

use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'title' => 'The hidden world of AI',
                'subtitle' => 'An AI Surver',
                'author' => 'Lilli Pinki',
                'content' => 'A long long article',
                'publication_date' => "2015-10-28 19:18:44",
                'stars' => 3,
            ]
        ];
        //

        foreach($articles as $article) {
            $newArticle = new Article();
            $newArticle->title = $article['title'];
            $newArticle->subtitle = $article['subtitle'];
            $newArticle->author = $article['author'];
            $newArticle->content = $article['content'];
            $newArticle->publication_date = $article['publication_date'];
            $newArticle->stars = $article['stars'];
            $newArticle->save();
        }
    }
}
