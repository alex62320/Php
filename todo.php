<?php

/* 
liste des classe a créer 

- user
- task
- tag


task 
id title category_id
1  foo   2
2  bar   1
3  baz   2

Category
id  name
1   pro
2   perso

*/
use App\Todo\Category;
use App\Todo\Tag;
use App\Todo\Task;
use App\Todo\User;

require __DIR__.'/vendor/autoload.php';

