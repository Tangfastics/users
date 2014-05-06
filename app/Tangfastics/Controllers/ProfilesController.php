<?php

namespace Tangfastics\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Tangfastics\Services\Forms\Profile as ProfileForm;
use Tangfastics\Repositories\UserRepositoryInterface;
use Tangfastics\Repositories\ArticleRepositoryInterface;

class ProfilesController extends BaseController
{
    protected $registrationForm;

    protected $articles;

    protected $users;

    protected $user;

    public function __construct(ArticleRepositoryInterface $articles, UserRepositoryInterface $users, ProfileForm $profileForm)
    {
        parent::__construct();

        $this->profileForm = $profileForm;

        $this->articles = $articles;

        $this->users = $users;

        $this->user = Auth::user();
    }

    public function index()
    {
        return Redirect::home()->withError('No Permission.');
    }

    public function show($username)
    {
        $user = $this->users->findByUsername($username);

        if (!is_object($user)) return Redirect::home()->withError('Profile Not Found.');

        $this->view('profile.show', compact('user'));
    }
}
