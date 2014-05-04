<?php

namespace Tangfastics\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Tangfastics\Services\Forms\Registration;
use Tangfastics\Repositories\UserRepositoryInterface;
use Tangfastics\Repositories\ArticleRepositoryInterface;

class UsersController extends BaseController
{
    protected $registrationForm;

    protected $articles;

    protected $users;

    protected $user;

    public function __construct(ArticleRepositoryInterface $articles, UserRepositoryInterface $users, Registration $registrationForm)
    {
        parent::__construct();

        $this->registrationForm = $registrationForm;

        $this->articles = $articles;

        $this->users = $users;

        $this->user = Auth::user();
    }

    public function index()
    {
        $users = $this->users->findAllPaginated();

        return $this->view('users.index', compact('users'));
    }

    public function create()
    {
        return $this->view('users.create');
    }

    public function store()
    {
        $this->registrationForm->validate(Input::all());

        // $user = new \User;

        // $user->username = \Input::get('username');
        // $user->email = \Input::get('email');
        // $user->password = \Hash::make(\Input::get('password'));

        // $user->save();

        if ($user = $this->users->create(Input::all()))
        {
            Auth::login($user);

            return Redirect::route('home')->withMessage(trans('users/create.message-success'));
        }

        return Redirect::back()->withInput()->withError('There was a problem registering you. Please try again.');        
    }
}
