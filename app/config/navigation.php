<?php

// Defining menu structure here
// the items that need to appear when user is logged in should have logged_in set as true
return [

    'menu' => [
        [
            'label' => 'Home',
            'route' => 'home',
            'active' => ['/', 'article*']
        ],

        [
            'label' => 'Users',
            'route' => 'users.index',
            'active' => ['users*'],
        ]
    ],
];
