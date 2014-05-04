<?php

namespace Tangfastics\Controllers;

use Tangfastics\Services\Forms\Registration;

class UsersController extends BaseController
{
    protected $registrationForm;

    public function __construct(Registration $registrationForm)
    {
        $this->registrationForm = $registrationForm;
    }

    public function index()
    {
        return $this->view('users.index');
    }

    public function create()
    {
        return $this->view('users.create');
    }

    public function store()
    {
        // $rules = [
        //     'username' => 'required|min:3|max:20|unique:users',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5|max:250|confirmed',
        // ];

        // $validation = \Validator::make(\Input::all(), $rules);

        // if ($validation->fails()) return \Redirect::back()->withInput()->withErrors($validation);

        $this->registrationForm->validate(\Input::all());

        $user = new \User;

        $user->username = \Input::get('username');
        $user->email = \Input::get('email');
        $user->password = \Hash::make(\Input::get('password'));

        $user->save();

        \Auth::login($user);

        return \Redirect::route('home')->withMessage(trans('users/create.message-success'));
    }
}
