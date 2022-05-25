<?php declare(strict_types = 1);

namespace App\Blog;

use App\Blog\Article;
use App\Blog\Category;
use App\Blog\Search;

class Search
{
    public static function hasCategory(Article $object, Category $category): bool
    {
        if ($object->getCategory() == $category) {
            return true;
        }

        return false;
    }
}