<?php

namespace Tangfastics\Services\Forms;

class Login extends Form
{
    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];
}
