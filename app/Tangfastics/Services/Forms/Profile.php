<?php

namespace Tangfastics\Services\Forms;

class Profile extends Form
{
    protected $rules = [
        'title' => 'required',
        'snippet' => 'required',
        'post' => 'required'
    ];
}
