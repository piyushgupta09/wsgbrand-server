<?php

return [

    'api' => [
        'cache' => [
            'enabled' => false,
            'duration' => 1, // 1 minute
            // 'duration' => 60 * 60 * 24 * 7, // 1 week
        ],
    ],

    'uia' => 'https://ui-avatars.com/api/?name=',

    'registerable-roles' => [
        [
            'id' => 'user-brand',
            'name' => 'User Brand',
        ],
        [
            'id' => 'user-vendor',
            'name' => 'User Vendor',
        ],
        [
            'id' => 'user-factory',
            'name' => 'User Factory',
        ],
    ],

    'assignable-roles' => [
        'user-brand' => [
            [
                'grade' => 'C',
                'id' => 'data-manager',
                'name' => 'Data Manager',
                'description' => 'Can manage data',
            ],
            [
                'grade' => 'C',
                'id' => 'order-manager-brand',
                'name' => 'Order Manager Brand',
                'description' => 'Can manage orders of brand',
            ],
            [
                'grade' => 'C',
                'id' => 'store-manager-brand',
                'name' => 'Store Manager Brand',
                'description' => 'Can manage stores of brand',
            ],
            [
                'grade' => 'C',
                'id' => 'account-manager-brand',
                'name' => 'Account Manager Brand',
                'description' => 'Can manage accounts of brand',
            ],
            [
                'grade' => 'B',
                'id' => 'manager-brand',
                'name' => 'Manager Brand',
                'description' => 'Can manage brand',
            ],
            [
                'grade' => 'A',
                'id' => 'owner-brand',
                'name' => 'Owner Brand',
                'description' => 'Can control brand',
            ],
        ],
        'user-vendor' => [
            [
                'grade' => 'B',
                'id' => 'manager-vendor',
                'name' => 'Manager Vendor',
                'description' => 'Can manage vendor',
            ],
            [
                'grade' => 'A',
                'id' => 'owner-vendor',
                'name' => 'Owner Vendor',
                'description' => 'Can control vendor',
            ],
        ],
        'user-factory' => [
            [
                'grade' => 'B',
                'id' => 'manager-factory',
                'name' => 'Manager Factory',
                'description' => 'Can manage factory',
            ],
            [
                'grade' => 'A',
                'id' => 'owner-factory',
                'name' => 'Owner Factory',
                'description' => 'Can control factory',
            ],
        ],
        'admin' => [
           
            [
                'grade' => 'C',
                'id' => 'data-manager',
                'name' => 'Data Manager',
                'description' => 'Can manage data',
            ],
            [
                'grade' => 'C',
                'id' => 'order-manager-brand',
                'name' => 'Order Manager Brand',
                'description' => 'Can manage orders of brand',
            ],
            [
                'grade' => 'C',
                'id' => 'store-manager-brand',
                'name' => 'Store Manager Brand',
                'description' => 'Can manage stores of brand',
            ],
            [
                'grade' => 'C',
                'id' => 'account-manager-brand',
                'name' => 'Account Manager Brand',
                'description' => 'Can manage accounts of brand',
            ],
            [
                'grade' => 'B',
                'id' => 'manager-brand',
                'name' => 'Manager Brand',
                'description' => 'Can manage brand',
            ],
            [
                'grade' => 'A',
                'id' => 'owner-brand',
                'name' => 'Owner Brand',
                'description' => 'Can control brand',
            ],
    
            [
                'grade' => 'B',
                'id' => 'manager-vendor',
                'name' => 'Manager Vendor',
                'description' => 'Can manage vendor',
            ],
            [
                'grade' => 'A',
                'id' => 'owner-vendor',
                'name' => 'Owner Vendor',
                'description' => 'Can control vendor',
            ],
        
            [
                'grade' => 'B',
                'id' => 'manager-factory',
                'name' => 'Manager Factory',
                'description' => 'Can manage factory',
            ],
            [
                'grade' => 'A',
                'id' => 'owner-factory',
                'name' => 'Owner Factory',
                'description' => 'Can control factory',
            ],
        ],
    ],

    'roles' => [
        [
            'id' => 'admin',
            'name' => 'Admin',
        ],
        [
            'id' => 'user',
            'name' => 'user',
        ],
        // Brand  
        [
            'id' => 'data-manager',
            'name' => 'Data Manager',
        ],
        [
            'id' => 'order-manager-brand',
            'name' => 'Order Manager Brand',
        ],
        [
            'id' => 'store-manager-brand',
            'name' => 'Store Manager Brand',
        ],
        [
            'id' => 'account-manager-brand',
            'name' => 'Account Manager Brand',
        ],
        [
            'id' => 'manager-brand',
            'name' => 'Manager Brand',
        ],
        [
            'id' => 'owner-brand',
            'name' => 'Owner Brand',
        ],
        // Vendor
        [
            'id' => 'manager-vendor',
            'name' => 'Manager Vendor',
        ],
        [
            'id' => 'owner-vendor',
            'name' => 'Owner Vendor',
        ],
        // Factory
        [
            'id' => 'manager-factory',
            'name' => 'Manager Factory',
        ],
        [
            'id' => 'owner-factory',
            'name' => 'Owner Factory',
        ],
    ],

    'create-actions' => [],

    'actionlinks' => [],

    'modulelinks' => [
        [
            'id' => 'menu-dashboard',
            'icon' => 'bi bi-speedometer2',
            'name' => 'Dashboard',
            'route' => 'panel.dashboard', // default 'panel.dashboard'
            'position' => 1,
            'access' => 'user',
            'child' => [],
        ],


        [
            'module' => 'Database Modules',
            'access' => 'admin|manager|data-manager',
            'child' => [],
        ],
        [
            'id' => 'menu-order-8',
            'icon' => 'bi bi-people',
            'name' => 'People',
            'route' => null,
            'position' => 2,
            'access' => 'admin|manager-brand|data-manager',
            'child' => [
                [
                    'name' => 'Employees',
                    'route' => 'employees.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Parties',
                    'route' => 'parties.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Suppliers',
                    'route' => 'suppliers.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
            ],
        ],
        [
            'id' => 'menu-order-9',
            'icon' => 'bi bi-star',
            'name' => 'Catalogs',
            'route' => null,
            'position' => 2,
            'access' => 'admin|manager-brand|data-manager',
            'child' => [
                [
                    'name' => 'Products',
                    'route' => 'products.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Brands',
                    'route' => 'brands.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Categories',
                    'route' => 'categories.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Collections',
                    'route' => 'collections.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
            ],
        ],
        [
            'id' => 'menu-cost-control',
            'icon' => 'bi bi-file-spreadsheet',
            'name' => 'Cost Controls',
            'route' => null,
            'position' => 3,
            'access' => 'admin|manager-brand|data-manager',
            'child' => [
                [
                    'name' => 'Material',
                    'route' => 'materials.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Fixed Costs',
                    'route' => 'fixedcosts.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Overheads',
                    'route' => 'overheads.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Consumables',
                    'route' => 'consumables.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
            ],
        ],
        [
            'id' => 'menu-price-control',
            'icon' => 'bi bi-file-spreadsheet',
            'name' => 'Product Plans',
            'route' => null,
            'position' => 3,
            'access' => 'admin|manager-brand|data-manager',
            'child' => [
                [
                    'name' => 'Pricing Strategy',
                    'route' => 'strategies.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Discount Offers',
                    'route' => 'discounts.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Return Policy',
                    'route' => 'return-policies.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Refund Conditions',
                    'route' => 'refund-policies.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
            ],
        ],
        [
            'id' => 'menu-dataset',
            'icon' => 'bi bi-diagram-3',
            'name' => 'Datasets',
            'route' => null,
            'position' => 3,
            'access' => 'admin|manager-brand|data-manager',
            'child' => [
                [
                    'name' => 'Attributes',
                    'route' => 'attrikeys.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                [
                    'name' => 'Measurements',
                    'route' => 'measurekeys.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
                // [
                //     'name' => 'Units',
                //     'route' => 'units.index',
                //     'access' => 'admin|manager-brand|data-manager',
                // ],
                [
                    'name' => 'Taxes',
                    'route' => 'taxes.index',
                    'access' => 'admin|manager-brand|data-manager',
                ],
            ],
        ],


        // [
        //     'module' => 'Management Modules',
        //     'access' => 'admin|manager|order-manager|store-manager|account-manager',
        //     'child' => [],
        // ],
        // [
        //     'id' => 'menu-system',
        //     'icon' => 'bi bi-shield-check',
        //     'name' => 'System Controls',
        //     'route' => null,
        //     'position' => 6,
        //     'access' => 'admin',
        //     'child' => [
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'Sync Data',
        //             'route' => 'sync.index',
        //             'position' => 1,
        //             'access' => 'admin',
        //         ],
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'Users',
        //             'route' => 'users.index',
        //             'position' => 1,
        //             'access' => 'admin',
        //         ],
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'Notifications',
        //             'route' => 'notifications.index',
        //             'position' => 2,
        //             'access' => 'admin',
        //         ],
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'Activity Logs',
        //             'route' => 'activitylogs.index',
        //             'position' => 3,
        //             'access' => 'admin',
        //         ],
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'Queued Jobs',
        //             'route' => 'jobs.index',
        //             'position' => 3,
        //             'access' => 'admin',
        //         ],
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'Failed Jobs',
        //             'route' => 'failedjobs.index',
        //             'position' => 4,
        //             'access' => 'admin',
        //         ],
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'Pusher Initiate',
        //             'route' => 'pusher.push',
        //             'position' => 5,
        //             'access' => 'admin',
        //         ],
        //         [
        //             'icon' => 'bi bi-arrow-right-short text-white',
        //             'name' => 'WPSubscriptions',
        //             'route' => 'webpushs.index',
        //             'position' => 6,
        //             'access' => 'admin',
        //         ],
        //     ],
        // ],
    ],

    'applinks' => [
        [
            'icon' => 'bi bi-search',
            'name' => 'Search Action',
            'route' => 'actions.search',
            'access' => 'user-role',
        ],
        [
            'icon' => 'bi bi-download',
            'name' => 'Install App',
            'action' => 'installPWA();',
        ],
    ],

    'userlinks' => [
        [
            'icon' => 'bi bi-person-circle',
            'name' => 'My Profile',
            'route' => 'profiles.show',
            'access' => '',
        ],
    ],

    'defaultinks' => [
        1 => [
            'icon' => 'bi bi-',
            'name' => 'About Us',
            'route' => 'about-us',
            'access' => '',
        ],
        2 => [
            'icon' => 'bi bi-',
            'name' => 'Terms & Conditions',
            'route' => 'terms-and-conditions',
            'access' => '',
        ],
    ],

];











// 'registerable-roles' => [
//     [
//         'id' => 'user-brand',
//         'name' => 'User Brand',
//     ],
//     [
//         'id' => 'user-vendor',
//         'name' => 'User Vendor',
//     ],
// ],

// 'assignable-roles' => [
//     'user-brand' => [
//         [
//             'grade' => 'C',
//             'id' => 'data-manager',
//             'name' => 'Data Manager',
//             'description' => 'Can manage data',
//         ],
//         [
//             'grade' => 'C',
//             'id' => 'order-manager-brand',
//             'name' => 'Order Manager Brand',
//             'description' => 'Can manage orders of brand',
//         ],
//         [
//             'grade' => 'C',
//             'id' => 'store-manager-brand',
//             'name' => 'Store Manager Brand',
//             'description' => 'Can manage stores of brand',
//         ],
//         [
//             'grade' => 'C',
//             'id' => 'account-manager-brand',
//             'name' => 'Account Manager Brand',
//             'description' => 'Can manage accounts of brand',
//         ],
//         [
//             'grade' => 'B',
//             'id' => 'manager-brand',
//             'name' => 'Manager Brand',
//             'description' => 'Can manage brand',
//         ],
//         [
//             'grade' => 'A',
//             'id' => 'owner-brand',
//             'name' => 'Owner Brand',
//             'description' => 'Can control brand',
//         ],
//     ],
//     'user-vendor' => [
//         [
//             'grade' => 'C',
//             'id' => 'order-manager-vendor',
//             'name' => 'Order Manager Vendor',
//             'description' => 'Can manage orders of vendor',
//         ],
//         [
//             'grade' => 'C',
//             'id' => 'store-manager-vendor',
//             'name' => 'Store Manager Vendor',
//             'description' => 'Can manage stores of vendor',
//         ],
//         [
//             'grade' => 'C',
//             'id' => 'account-manager-vendor',
//             'name' => 'Account Manager Vendor',
//             'description' => 'Can manage accounts of vendor',
//         ],
//         [
//             'grade' => 'B',
//             'id' => 'manager-vendor',
//             'name' => 'Manager Vendor',
//             'description' => 'Can manage vendor',
//         ],
//         [
//             'grade' => 'A',
//             'id' => 'owner-vendor',
//             'name' => 'Owner Vendor',
//             'description' => 'Can control vendor',
//         ],
//     ],
//     'admin' => [
//             [
//                 'grade' => 'C',
//                 'id' => 'order-manager-brand',
//                 'name' => 'Order Manager Brand',
//                 'description' => 'Can manage orders of brand',
//             ],
//             [
//                 'grade' => 'C',
//                 'id' => 'store-manager-brand',
//                 'name' => 'Store Manager Brand',
//                 'description' => 'Can manage stores of brand',
//             ],
//             [
//                 'grade' => 'C',
//                 'id' => 'account-manager-brand',
//                 'name' => 'Account Manager Brand',
//                 'description' => 'Can manage accounts of brand',
//             ],
//             [
//                 'grade' => 'B',
//                 'id' => 'manager-brand',
//                 'name' => 'Manager Brand',
//                 'description' => 'Can manage brand',
//             ],
//             [
//                 'grade' => 'A',
//                 'id' => 'owner-brand',
//                 'name' => 'Owner Brand',
//                 'description' => 'Can control brand',
//             ],
//             [
//                 'grade' => 'C',
//                 'id' => 'order-manager-vendor',
//                 'name' => 'Order Manager Vendor',
//                 'description' => 'Can manage orders of vendor',
//             ],
//             [
//                 'grade' => 'C',
//                 'id' => 'store-manager-vendor',
//                 'name' => 'Store Manager Vendor',
//                 'description' => 'Can manage stores of vendor',
//             ],
//             [
//                 'grade' => 'C',
//                 'id' => 'account-manager-vendor',
//                 'name' => 'Account Manager Vendor',
//                 'description' => 'Can manage accounts of vendor',
//             ],
//             [
//                 'grade' => 'B',
//                 'id' => 'manager-vendor',
//                 'name' => 'Manager Vendor',
//                 'description' => 'Can manage vendor',
//             ],
//             [
//                 'grade' => 'A',
//                 'id' => 'owner-vendor',
//                 'name' => 'Owner Vendor',
//                 'description' => 'Can control vendor',
//             ],
//     ],
// ],

// 'roles' => [
//     [
//         'id' => 'admin',
//         'name' => 'Admin',
//     ],
//     [
//         'id' => 'user',
//         'name' => 'user',
//     ],
//    // mandatory for all
//     [
//         'id' => 'user-brand',
//         'name' => 'User Brand',
//     ],
//     [
//         'id' => 'user-vendor',
//         'name' => 'User Vendor',
//     ],
//     // for reporting purpose
//     [
//         'id' => 'owner-brand',
//         'name' => 'Owner Brand',
//     ],
//     [
//         'id' => 'owner-vendor',
//         'name' => 'Owner Vendor',
//     ],
//     // for general purpose
//     [
//         'id' => 'manager-brand',
//         'name' => 'Manager Brand',
//     ],
//     [
//         'id' => 'manager-vendor',
//         'name' => 'Manager Vendor',
//     ],
//     // for specific purpose
//     [
//         'id' => 'order-manager-brand',
//         'name' => 'Order Manager Brand',
//     ],
//     [
//         'id' => 'store-manager-brand',
//         'name' => 'Store Manager Brand',
//     ],
//     [
//         'id' => 'account-manager-brand',
//         'name' => 'Account Manager Brand',
//     ],
//     [
//         'id' => 'order-manager-vendor',
//         'name' => 'Order Manager Vendor',
//     ],
//     [
//         'id' => 'store-manager-vendor',
//         'name' => 'Store Manager Vendor',
//     ],
//     [
//         'id' => 'account-manager-vendor',
//         'name' => 'Account Manager Vendor',
//     ],
//     // for data purpose
//     [
//         'id' => 'data-manager',
//         'name' => 'Data Manager',
//     ],
// ],
