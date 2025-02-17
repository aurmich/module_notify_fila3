<?php return array (
  'navigation' => 
  array (
    'name' => 'Cache',
    'plural' => 'Cache',
    'group' => 
    array (
      'name' => 'Sistema',
      'description' => 'Gestione della cache di sistema',
    ),
    'icons' => 
    array (
      'view' => 'xot::view-cache',
      'config' => 'xot::config-cache',
      'route' => 'xot::route-cache',
      'event' => 'xot::event-cache',
    ),
    'sort' => 31,
    'label' => 'Gestione Cache',
    'icon' => 'xot-cache',
  ),
  'pages' => 
  array (
    'health_check_results' => 
    array (
      'buttons' => 
      array (
        'refresh' => 'Refresh',
      ),
      'heading' => 'Application Health',
      'navigation' => 
      array (
        'group' => 'Settings',
        'label' => 'Application Health',
      ),
      'notifications' => 
      array (
        'check_results' => 'Check results from',
      ),
    ),
    'artisan-commands' => 
    array (
      'commands' => 
      array (
        'view_cache' => 
        array (
          'label' => 'Cache Views',
          'description' => 'Genera la cache delle viste',
        ),
        'config_cache' => 
        array (
          'label' => 'Cache Config',
          'description' => 'Genera la cache della configurazione',
        ),
        'route_cache' => 
        array (
          'label' => 'Cache Routes',
          'description' => 'Genera la cache delle route',
        ),
        'event_cache' => 
        array (
          'label' => 'Cache Events',
          'description' => 'Genera la cache degli eventi',
        ),
      ),
    ),
  ),
);