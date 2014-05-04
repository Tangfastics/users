<?php

namespace Tangfastics\Controllers;

use Tangfastics\Services\Forms\Login;

class SessionsController extends BaseController
{
    protected $loginForm;

    public function __construct(Login $loginForm)
    {
        $this->loginForm = $loginForm;
    }

    public function create()
    {
        return $this->view('sessions.create');
    }

    public function store()
    {
        $this->loginForm->validate(\Input::all());

        if (\Auth::attempt(\Input::only(['username', 'password']), \Input::get('remember_me'))) return \Redirect::intended('/')->withMessage(trans('sessions/store.message-success'));

        // return \Redirect::back()->withError('Incorrect username/password. Please try again.');
    }

    public function destory($id = null)
    {
        \Auth::logout();

        return \Redirect::route('home')->withMessage(trans('sessions/destory.message-success'));
    }
}
