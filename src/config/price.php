<?php

return [

    'price' => [

        'name' => 'price',

        'menu' => [
            'url' => 'price::admin::index',
            'caption' => 'Price',
            'icon' => 'fa fa-money',
            'active' => 'price::admin::index',
        ],

        'menu-settings' => [
            'url' => 'blog::admin::get-settings',
            'caption' => 'Blog settings',
            'icon' => 'fa fa-cog',
            'active' => 'blog::admin::get-settings',
        ],

        'default-settings' => [
            'meta-keywords' => 'Engin CMS, Laravel',
            'meta-description' => 'This package for Engin CMS',
            'meta-title' => 'Blog package',
        ],
    ],
];
