<?php

namespace Tangfastics\Repositories;

use Tangfastics\Models\User;
use Tangfastics\Models\Article;

interface ArticleRepositoryInterface
{
    public function findAll();

    public function findAllPaginated($perPage=10);

    public function findBySlug($slug);

    public function findByCategory($slug, $perPage=10);
}
