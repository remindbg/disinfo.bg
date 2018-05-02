<?php return array (
  'barryvdh/laravel-debugbar' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\Debugbar\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Debugbar' => 'Barryvdh\\Debugbar\\Facade',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravelrus/localized-carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Laravelrus\\LocalizedCarbon\\LocalizedCarbonServiceProvider',
    ),
    'aliases' => 
    array (
      'LocalizedCarbon' => 'Laravelrus\\LocalizedCarbon\\LocalizedCarbon',
      'DiffFormatter' => 'Laravelrus\\LocalizedCarbon\\DiffFactoryFacade',
    ),
  ),
);