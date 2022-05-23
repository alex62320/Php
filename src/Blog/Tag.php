<?php declare(strict_types = 1);

namespace App\Blog;

use App\Blog\Traits\Articable;
use App\Blog\ANamedObject;

class Tag extends ANamedObject
{
    use Articable;

    public function __construct(int $id, string $name, ?string $description, array $articles = [])
    {
        parent::__construct($id, $name, $description);
        $this->articles = $articles;
    }
}