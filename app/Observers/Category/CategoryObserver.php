<?php

namespace App\Observers\Category;

use App\Models\Category\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    public function saving(Category $category)
    {
        $category->slug = Str::slug($category->title);
    }

    public function created(Category $category)
    {
        //
    }

    public function updated(Category $category)
    {
        //
    }


    public function deleted(Category $category)
    {
        //
    }

    public function restored(Category $category)
    {
        //
    }

    public function forceDeleted(Category $category)
    {
        //
    }
}
