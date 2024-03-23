<?php

return [

    'brand_id' => 'deshigirl',

    // Base URL for the MonaAL application
    'url' => env('WSG_BASE_URL', 'http://localhost:8000'),

    // API Token for secure access
    'token' => '1234567890',

    // Base URL for API requests,
    'base_url' => env('WSG_BASE_URL', 'http://localhost:8000') . '/api/sync',

    // WHAT I TAKE FROM WSG (using Actions)
    // API Endpoints for synchronization operations
    'api' => [
        'sync' => [
            'taxes' => '/taxes', 
            'brands' => '/brands', 
            'categories' => '/categories', 
            'collections' => '/collections', 
        ],
    ],

    // WHAT I GIVE TO WSG (using SyncCoordinator)
    'actions' => [
        'products' => 'Fpaipl\Prody\Actions\LoadProducts.php',
    ],

];
