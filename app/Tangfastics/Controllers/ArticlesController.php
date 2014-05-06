<?php

namespace Tangfastics\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Tangfastics\Services\Forms\Article;
use Tangfastics\Services\Forms\ArticleEdit;
use Tangfastics\Repositories\ArticleRepositoryInterface;

class ArticlesController extends BaseController
{
    protected $articles;

    protected $articleForm;

    public function __construct(ArticleRepositoryInterface $articles, Article $articleForm)
    {
        parent::__construct();

        $this->articles = $articles;

        $this->articleForm = $articleForm;

        $this->beforeFilter('auth', ['only' => ['create', 'store', 'edit', 'update', 'destory']]);
    }

    public function index()
    {
        $articles = $this->articles->findAllPaginated();

        $this->view('articles.index', compact('articles'));
    }

    public function show($id)
    {

    }

    public function create()
    {
        $this->view('articles.create');
    }

    public function store()
    {
        $this->articleForm->validate(Input::all());
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destory($id)
    {

    }
}
