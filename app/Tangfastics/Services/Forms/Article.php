<?php

namespace Tangfastics\Services\Forms;

class Article extends Form
{
    protected $rules = [
        'title' => 'required',
        'snippet' => 'required',
        'post' => 'required'
    ];
}
