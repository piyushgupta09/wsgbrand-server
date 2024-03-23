<?php

return [

    'show_add_form' => false,

    'fabric_category_types' => [
        'fabric' => 'Fabric',
        'accessories' => 'Accessories',
        'trims' => 'Trims',
        'packaging' => 'Packaging',
        'other' => 'Other',
    ],
    
    'fabric_units' => [
        'mtr' => 'Meter',
        'kgs' => 'Kilogram',
        'pcs' => 'Piece',
        'lbs' => 'Pound',
        'gms' => 'Gram',
        'mts' => 'Meter',
        'yds' => 'Yard',
        'inch' => 'Inch',
        'cms' => 'Centimeter',
    ],
    
    'sizes' => [
        'free-size' => 'Free',
        'xsmall' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
        'xlarge' => 'X-Large',
        'xxlarge' => 'XX-Large',
        'xxxlarge' => 'XXX-Large',
    ],

    'size-abbr' => [
        'free-size' => 'f',
        'xsmall' => 'xs',
        'small' => 's',
        'medium' => 'm',
        'large' => 'l',
        'xlarge' => 'xl',
        'xxlarge' => 'xxl',
        'xxxlarge' => '3xl',
    ],

    'units' =>[
        'fcpu' => [
            'inch' => 'Inch',
            'cms' => 'Centimeter',
            'mtr' => 'Meter',
        ]
    ],

    'overhead_stages' =>[
        [
            'id' => 'pre-production',
            'name' => 'Pre-Production',
        ],
        [
            'id' => 'production',
            'name' => 'Production',
        ],
        [
            'id' => 'post-production',
            'name' => 'Post-Production',
        ],
        [
            'id' => 'marketing',
            'name' => 'Marketing',
        ],
        [
            'id' => 'sales',
            'name' => 'Sales',
        ],
        [
            'id' => 'administration',
            'name' => 'Administration',
        ],
    ],

    'decisions' => [
        [
            'name' => 'Basic',
            'slug' => 'basic-details',
            'details' => 'How we procure the product, e.g., buy, outsourced, make',
            'tags' => 'buy, outsource, make',
        ],
        [
            'name' => 'Advance',
            'slug' => 'advance-details',
            'details' => 'How we procure the product, e.g., buy, outsourced, make',
            'tags' => 'buy, outsource, make',
        ],
        [
            'name' => 'Decisions',
            'slug' => 'decisions',
            'details' => 'How we procure the product, e.g., buy, outsourced, make',
            'tags' => 'buy, outsource, make',
        ],
        [
            'name' => 'Costing',
            'slug' => 'costing',
            'details' => 'How we cost the product, e.g., overheads, consumables',
            'tags' => 'overheads, consumables',
        ],
        
        // [
        //     'name' => 'Pricing',
        //     'slug' => 'pricing',
        //     'details' => 'How we price the product, e.g., markup, margin, discount',
        //     'tags' => 'markup, margin, discount',
        // ],
        // [
        //     'name' => 'Discounts',
        //     'slug' => 'discounts',
        //     'details' => 'How we discount the product, e.g., trade, cash, volume',
        //     'tags' => 'trade, cash, volume',
        // ],
        // [
        //     'name' => 'Marketing',
        //     'slug' => 'marketing',
        //     'details' => 'How we market the product, e.g., online, offline, social',
        //     'tags' => 'online, offline, social',
        // ],
    ],

    'buy_decisions' => [
        [
            'name' => 'Factory',
            'type' => 'factory', // e.g., market,factory,vendor | ecomm,retail,inbulk,offline | payment,logistics
            'nature' => 'buy', // buy | sell | service
            'details' => 'We make this product in our factory',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Vendor',
            'type' => 'vendor',
            'nature' => 'buy',
            'details' => 'We buy this product from vendor',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Market',
            'type' => 'market',
            'nature' => 'buy',
            'details' => 'We buy this product from market',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
    ],

    'sell_decisions' =>[
        [
            'name' => 'Ecommerce',
            'type' => 'ecomm',
            'nature' => 'sell',
            'details' => 'We sell this product on ecommerce',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Retailpur',
            'type' => 'retail',
            'nature' => 'sell',
            'details' => 'We sell this product on retailpur',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Wholesale',
            'type' => 'inbulk',
            'nature' => 'sell',
            'details' => 'We sell this product on wholesale',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Pos',
            'type' => 'pos',
            'nature' => 'sell',
            'details' => 'We sell this product offline in shop via pos',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
    ],

    'payment_decisions' => [
        [
            'name' => 'Cash on Delivery',
            'type' => 'pay_cod',
            'nature' => 'payment',
            'details' => 'We provide cash on delivery service',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => '20 % Advance',
            'type' => 'pay_part',
            'nature' => 'payment',
            'details' => 'We provide 20% advance service',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => '50 % Advance',
            'type' => 'pay_half',
            'nature' => 'payment',
            'details' => 'We provide 50% advance service',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Full Advance',
            'type' => 'pay_full',
            'nature' => 'payment',
            'details' => 'We provide 100% advance service',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ]
    ],

    'delivery_decisions' => [
        [
            'name' => 'Pickup',
            'type' => 'del_pick',
            'nature' => 'delivery',
            'details' => 'We provide pickup service',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Free Delivery',
            'type' => 'del_free',
            'nature' => 'delivery',
            'details' => 'We provide free delivery service',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ],
        [
            'name' => 'Paid Delivery',
            'type' => 'del_paid',
            'nature' => 'delivery',
            'details' => 'We provide paid delivery service',
            'image' => 'https://icon-library.com/images/e-commerce-icon-png/e-commerce-icon-png-5.jpg',
        ]
    ],


    'decision_values' => [
        'ecomm' => [
            'strategy' => 1,
            'discount' => 1,
            'refund-policy' => 1,
            'return-policy' => 1,
        ],
        'inbulk' => [
            'strategy' => 1,
            'discount' => 1,
            'refund-policy' => 1,
            'return-policy' => 1,
        ],
        'retail' => [
            'strategy' => 1,
            'discount' => 1,
            'refund-policy' => 1,
            'return-policy' => 1,
        ],
        'pos' => [
            'strategy' => 1,
            'discount' => 1,
            'refund-policy' => 1,
            'return-policy' => 1,
        ],
    ],

    'default' => [
        'measurements' => [
            'Hips' => [
                'free-size' => '34',
                'large' => '38',
                'small' => '32',
                'medium' => '36',
                'large' => '36',
                'xlarge' => '38',
                'xxlarge' => '42',
                'xxxlarge' => '42',
            ],
            'Bust' => [
                'free-size' => '34',
                'large' => '38',
                'small' => '32',
                'medium' => '36',
                'large' => '36',
                'xlarge' => '38',
                'xxlarge' => '42',
                'xxxlarge' => '42',
            ],
            'Waist' => [
                'free-size' => '34',
                'large' => '38',
                'small' => '32',
                'medium' => '36',
                'large' => '36',
                'xlarge' => '38',
                'xxlarge' => '42',
                'xxxlarge' => '42',
            ],
            'Length' => [
                'free-size' => '34',
                'large' => '38',
                'small' => '32',
                'medium' => '36',
                'large' => '36',
                'xlarge' => '38',
                'xxlarge' => '42',
                'xxxlarge' => '42',
            ],
            'Shoulder' => [
                'free-size' => '34',
                'large' => '38',
                'small' => '32',
                'medium' => '36',
                'large' => '36',
                'xlarge' => '38',
                'xxlarge' => '42',
                'xxxlarge' => '42',
            ],
            'Sleeve' => [
                'free-size' => '34',
                'large' => '38',
                'small' => '32',
                'medium' => '36',
                'large' => '36',
                'xlarge' => '38',
                'xxlarge' => '42',
                'xxxlarge' => '42',
            ],
            'Collar' => [
                'free-size' => '34',
                'large' => '38',
                'small' => '32',
                'medium' => '36',
                'large' => '36',
                'xlarge' => '38',
                'xxlarge' => '42',
                'xxxlarge' => '42',
            ],
        ],
    ],

];
