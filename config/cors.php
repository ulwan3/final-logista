<?php

return [
    'paths' => ['api/*', 'login', 'register', '*'],  // Biarkan akses ke semua route
    
    'allowed_methods' => ['*'],  // Izinkan semua method (GET, POST, dll)
    
    'allowed_origins' => [
        'http://localhost:8100',  // Port Ionic (ganti sesuai port Anda)
        'http://localhost:4200',
    ],
    
    'allowed_origins_patterns' => [],
    
    'allowed_headers' => ['*'],  // Izinkan semua header
    
    'exposed_headers' => [],
    
    'max_age' => 0,
    
    'supports_credentials' => true,  // Untuk support login/session
];