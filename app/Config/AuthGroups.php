<?php

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public string $defaultGroup = 'user';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * The available authentication systems, listed
     * with alias and class name. These can be referenced
     * by alias in the auth helper:
     *      auth('api')->attempt($credentials);
     */
    public array $groups = [
        'admin' => [
            'title'       => 'Admin',
            'description' => 'Complete control of the site.',
        ],
        'editor' => [
            'title'       => 'Editor',
            'description' => 'Day to day administrators of the site.',
        ]
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system. Each system is defined
     * where the key is the
     *
     * If a permission is not listed here it cannot be used.
     */
    public array $permissions = [
        'admin.dashboard'       => 'Can access the Dashboard',
        'admin.blocks'          => 'Can access the Blocks',
        'admin.banners'         => 'Can access the Banners',
        'admin.pages'           => 'Can access the Pages',
        'admin.menus'           => 'Can access the Menus',
        'admin.blogs'           => 'Can access the Blog',
        'admin.gallery'           => 'Can access the Gallery',
        'admin.forms'           => 'Can access the Forms',
        'admin.shop'           => 'Can access the Products',
        'admin.settings'        => 'Can access the main site settings',
        'admin.users'           => 'Can access the Users',
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     */
    public array $matrix = [
        'admin' => [
            'admin.dashboard',
            'admin.blocks',
            'admin.banners',
            'admin.pages',
            'admin.menus',
            'admin.blogs',
            'admin.gallery',
            'admin.forms',
            'admin.shop',
            'admin.settings',
            'admin.users',
        ],
        'editor' => [
            'admin.dashboard',
            'admin.blocks',
            'admin.banners',
            'admin.pages',
            'admin.menus',
            'admin.blogs',
            'admin.gallery',
        ]
    ];
}
