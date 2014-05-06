<?php

namespace Tangfastics\Presenters;

use Carbon\Carbon;
use Tangfastics\Models\User;
use McCool\LaravelAutoPresenter\BasePresenter;

class UserPresenter extends BasePresenter
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

    public function joinDate()
    {
        return $this->resource->created_at->toFormattedDateString();
    }

    public function fullName()
    {
        if (isset($this->resource->profile->first_name) AND isset($this->resource->profile->last_name))
        {
            return $this->resource->profile->first_name . ' ' . $this->resource->profile->last_name;
        }

        return 'Unkown';
    }

    public function dob()
    {
        if (isset($this->resource->profile->dob_day) AND isset($this->resource->profile->dob_month) AND isset($this->resource->profile->dob_year))
        {
            return Carbon::createFromDate($this->resource->profile->dob_year, $this->resource->profile->dob_month, $this->resource->profile->dob_day)->toFormattedDateString();
        }

        return 'Unknown';
    }

    public function age()
    {
        if (isset($this->resource->profile->dob_day) AND isset($this->resource->profile->dob_month) AND isset($this->resource->profile->dob_year))
        {
            return Carbon::createFromDate($this->resource->profile->dob_year, $this->resource->profile->dob_month, $this->resource->profile->dob_day)->age;
        }
    }

    public function gender()
    {
        if (isset($this->resource->profile->gender))
        {
            return ucfirst($this->resource->profile->gender);
        }

        return 'Unknown';
    }

    public function skype()
    {
        return $this->resource->profile->skype_address ?: 'Unknown';
    }

    public function aim()
    {
        return $this->resource->profile->aim_address ?: 'Unknown';
    }

    public function msn()
    {
        return $this->resource->profile->msn_address ?: 'Unknown';
    }

    public function web()
    {
        return $this->resource->profile->web_address ? \HTML::link($this->resource->profile->web_address) : 'Unknown';
    }

    public function icq()
    {
        return $this->resource->profile->icq_address ?: 'Unknown';
    }

    public function yahoo()
    {
        return $this->resource->profile->yahoo_address ?: 'Unknown';
    }

    public function jabber()
    {
        return $this->resource->profile->jabber_address ?: 'Unknown';
    }

    public function twitter()
    {
        return $this->resource->profile->twitter ? \HTML::link('http://www.twitter.com/' . $this->resource->profile->twitter, '@'.$this->resource->profile->twitter) : 'Unknown';
    }

    public function facebook()
    {
        return $this->resource->profile->facebook ? \HTML::link($this->resource->profile->facebook, 'Visit Me') : 'Unknown';
    }
}
