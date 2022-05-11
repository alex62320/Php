<?php

use Blog\Article;
use Blog\Category;

require __DIR__.'/vendor/autoload.php';


$categories = [
    new Category(1, 'Foo', null),
    new Category(2, 'Bar', null),
    new Category(3, 'Baz', null),
];
dump($categories);

$articles = [
    new Article(1, 'Lorem', 'Lorem lorem', $categories[0]),
    new Article(2, 'Ipsum', 'Ipsum ipsum', $categories[1]),
    new Article(3, 'Sit', 'Sit Sit', $categories[1]),

];
dump($articles);

foreach ($articles as $article) {
    echo $article->getTitle();
    echo '<br>';
    echo $article->getCategory()->getName() ;
    echo '<br>';
}
