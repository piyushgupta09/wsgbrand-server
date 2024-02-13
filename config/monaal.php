<?php

return [

    'supplier_id' => 1,

    // Base URL for the MonaAL application
    'url' => env('MONAAL_BASE_URL'),

    // API Token for secure access
    'token' => '1234567890',

    // Base URL for API requests,
    'base_url' => env('MONAAL_BASE_URL'),

    // WHAT I TAKE FROM MONAAL (using Actions)
    // API Endpoints for synchronization operations
    'api' => [
        'sync' => [

            // aka 'materials_count' of 'materials'
            'products_count' => '/api/sync/products_count',

            // aka 'materials' with 'material_options' & 'material_ranges'
            // via Fpaipl\Prody\Actions\LoadMaterials
            'products' => '/api/sync/products', 
            
            // aka 'pos' with 'pos_items'
            // via Fpaipl\Brandy\Actions\LoadPos
            'sos' => '/api/sync/sos/{customer}', 
            
            // aka 'bills' with 'bill_items'
            // via Fpaipl\Brandy\Actions\LoadBills
            'sales' => '/api/sync/sales/{customer}', 
        ],
    ],

    // WHAT I GIVE TO MONAAL (using SyncCoordinator)
    'actions' => [
        'sales' => 'Fpaipl\Brandy\Actions\LoadBills.php',
    ],

];
