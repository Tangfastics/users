<?php

namespace Tangfastics\Repositories\Eloquent;

use Illuminate\Support\Str;
use Tangfastics\Models\User;
use Tangfastics\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Tangfastics\Repositories\ArticleRepositoryInterface;

class ArticleRepository extends AbstractRepository implements ArticleRepositoryInterface
{
    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    public function findAll()
    {
        //code
    }

    public function findAllPaginated($perPage=10)
    {
        //code
    }

    public function findBySlug($slug)
    {
        //code
    }

    public function findByCategory($slug, $perPage=10)
    {
        //code
    }
}
