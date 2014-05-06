<?php

namespace Tangfastics\Presenters;

use Tangfastics\Models\User;
use McCool\LaravelAutoPresenter\BasePresenter;

class ProfilePresenter extends BasePresenter
{
    /**
     * Create a new UserPresenter instance.
     *
     * @param  \Tangfastics\Models\User  $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->resource = $user;
    }
}
