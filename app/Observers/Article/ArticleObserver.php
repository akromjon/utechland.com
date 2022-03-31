<?php

namespace App\Observers\Article;

use App\Models\Article\Article;
use Illuminate\Support\Str;

class ArticleObserver
{
    public function saving(Article $article)
    {
        $article->slug = Str::slug($article->title);
    }

    public function created(Article $article)
    {
        //
    }

    public function updated(Article $article)
    {
        //
    }

    public function deleted(Article $article)
    {
        //
    }

    public function restored(Article $article)
    {
        //
    }

    public function forceDeleted(Article $article)
    {
        //
    }
}
