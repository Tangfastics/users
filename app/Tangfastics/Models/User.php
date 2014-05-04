<?php

namespace Tangfastics\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements UserInterface, RemindableInterface
{
    /**
     * The class to used to present the model.
     *
     * @var string
     */
    public $presenter = 'Tangfastics\Presenters\UserPresenter';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ 'password' ];

    protected $with = [ 'profile' ];

    /**
     * Query the user's social profile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('Tangfastics\Models\Profile');
    }

    /**
     * Query the tricks that the user has posted.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('Tangfastics\Models\Article');
    }

    /**
     * Get the remember me token from DB
     *
     * @return mixed
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }
    
    /**
     * Set the remember me token to DB
     *
     * @return mixed
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column of remember me token in DB
     *
     * @return mixed
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    /**
     * Check user's permissions
     *
     * @return bool
     */
    public function isAdmin()
    {
        return ($this->is_admin == true);
    }
}
