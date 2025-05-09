<?php
return [

  'paths' => ['api/*'],

  'allowed_methods' => ['*'],

  'allowed_origins' => [env('APP_FRONTEND_URL', 'http://localhost:5174')],

  'allowed_origins_patterns' => [],

  'allowed_headers' => ['*'],

  'exposed_headers' => [],

  'max_age' => 0,

  'supports_credentials' => true,

];
