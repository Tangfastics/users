<?php

namespace Tangfastics\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use illuminate\Support\Facades\Redirect;

class BaseController extends Controller
{
    protected $layout = 'layouts.master';

    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => ['post', 'put', 'patch', 'delete']]);
    }

    protected function setupLayout()
    {
        if (! is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    protected function view($path, $data = [])
    {
        $this->layout->content = View::make($path, $data);
    }
}
