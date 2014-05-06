<?php

namespace Tangfastics\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements UserInterface, RemindableInterface
{

    public $presenter = 'Tangfastics\Presenters\UserPresenter';

    protected $table = 'users';

    protected $hidden = [ 'password', 'is_admin', 'remember_token' ];

    protected $with = [ 'profile' ];

    protected $dates = [ 'last_login' ];

    protected $fillable = [ 'username', 'email', 'password' ];

    protected $softDelete = true;

    public function profile()
    {
        return $this->hasOne('Tangfastics\Models\Profile');
    }

    public function articles()
    {
        return $this->hasMany('Tangfastics\Models\Article');
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getReminderEmail()
    {
        return $this->email;
    }

    public function isAdmin()
    {
        return ($this->is_admin == true);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
