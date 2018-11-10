<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'AdminLTE 2',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Admin</b>LTE',

    'logo_mini' => '<b>A</b>LT',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        [
            'text' => 'See the site',
            'url' => '/',
            'icon' => 'file-alt',
        ],
        'ADMIN',
        [
            'text' => 'Blog',
            'url'  => 'admin-master/blog',
            'can'  => 'manage-blog', //middleware !
        ],
        [
            'text'        => 'Pages',
            'url'         => 'admin-master/pages',
            'icon'        => 'file',
            'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'       => 'Important',
            'icon' => 'circle-notch',
            'icon_color' => 'red',
        ],
        [
            'text'       => 'Warning',
            'icon'       => 'circle-notch',
            'icon_color' => 'yellow',
        ],
        [
            'text'       => 'Information',
            'icon'       => 'circle-notch',
            'icon_color' => 'aqua',
        ],
        [
            'text' => 'Home page',
            'icon' => 'home',
            'submenu' => [
                [
                    'text' => 'Logo',
                    'icon' => 'puzzle-piece',
                    'url' => '/admin-master/logo',
                ],
                [
                    'text' => 'Carousel',
                    'icon' => 'play',
                    'url' => '/admin-master/carousel',
                ],
                [
                    'text' => 'Invitation after 3 services',
                    'icon' => 'align-center',
                    'url' => '/admin-master/inv1',
                ],
                [
                    'text' => 'Video',
                    'icon' => 'video',
                    'url' => '/admin-master/video',
                ],
                [
                    'text' => 'Testimonials',
                    'icon' => 'comments',
                    'url' => '/admin-master/testimonials',
                ],
                [
                    'text' => 'All services',
                    'icon' => 'briefcase',
                    'url' => '/admin-master/services',
                ],
                [
                    'text' => 'Team',
                    'icon' => 'people-carry',
                    'url' => '/admin-master/team',
                ],
                [
                    'text' => 'Ready invitation',
                    'icon' => 'align-center',
                    'url' => '/admin-master/inv2',
                ],
            ],
        ],
        [
            'text' => 'Services page',
            'icon' => 'concierge-bell',
            'submenu' => [
                [
                    'text' => 'Projects',
                    'icon' => 'network-wired',
                    'submenu' => [
                        [
                            'text' => 'All projects',
                            'icon' => 'project-diagram',
                            'url' => '/admin-master/allProjects',
                        ],
                        [
                            'text' => '6 projects part',
                            'icon' => 'code-branch',
                            'url' => 'admin-master/sixProjects',
                        ],
                    ],
                ],
            ],
        ], 
        [
            'text' => 'Blog page',
            'icon' => 'newspaper',
            'submenu' => [
                [
                    'text' => 'Validations',
                    'icon' => 'check-circle',
                    'submenu' => [
                        [
                            'text' => 'Validate articles/comments',
                            'icon' => 'pen-fancy',
                            'url' => '/admin-master/validateArticles',
                        ],
                        [
                            'text' => 'Validate tags',
                            'icon' => 'tags',
                            'url' => '/admin-master/validateTags',
                        ],
                        [
                            'text' => 'Validate categories',
                            'icon' => 'boxes',
                            'url' => '/admin-master/validatecategories',
                        ],
                    ],
                ],
                [
                    'text' => 'Write article',
                    'icon' => 'newspaper',
                    'url' => '/admin-master/writeArticle',
                ],
                [
                    'text' => 'See and edit articles',
                    'icon' => 'newspaper',
                    'url' => '/admin-master/personalArticles',
                ],
            ],
        ],
        [
            'text' => 'Contact',
            'icon' => 'mail-bulk',
            'url' => 'admin-master/contact',
        ],
        'ACCOUNT SETTINGS',
        [
            'text' => 'Profile',
            'icon' => 'user',
            'url'  => 'admin-master/profile',
        ],
        [
            'text' => 'Manage users',
            'icon' => 'users',
            'url' => 'admin-master/users',
        ],
        [
            'text' => 'Manage roles',
            'icon' => 'user-tie',
            'url' => 'admin-master/users',
        ],
        [
            'text' => 'Manage positions',
            'icon' => 'user-tag',
            'url' => 'admin-master/users',
        ],
        // [
        //     'text' => 'Change Password',
        //     'icon' => 'lock',
        //     'url'  => 'admin-master/settings',
        // ],
        'Editor',
        [
            'text' => 'Write article',
            'icon' => 'newspaper',
            'url' => '/admin-master/writeArticle',
        ],
        [
            'text' => 'See and edit articles',
            'icon' => 'newspaper',
            'url' => '/admin-master/personalArticles',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
