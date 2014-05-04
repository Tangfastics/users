<?php

namespace Tangfastics\Services\Forms;

class Registration extends Form
{
    protected $rules = [
        'username'  => 'required|min:3|max:20|unique:users',
        'email'     => 'required|email|unique:users',
        'password'  => 'required|min:5|max:250|confirmed',
    ];
}
