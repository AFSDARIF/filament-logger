<?php
return [
    'datetime_format' => 'd/m/Y H:i:s',
    'date_format' => 'd/m/Y',

    'activity_resource' => \Afsdarif\FilamentLogger\Resources\ActivityResource::class,
	'scoped_to_tenant' => true,
	'navigation_sort' => null,

    'resources' => [
        'enabled' => true,
        'log_name' => 'Resource',
        'logger' => \Afsdarif\FilamentLogger\Loggers\ResourceLogger::class,
        'color' => 'success',
		
        'exclude' => [
            //App\Filament\Resources\UserResource::class,
        ],
        'cluster' => null,
        'navigation_group' =>'Settings',
    ],

    'access' => [
        'enabled' => true,
        'logger' => \Afsdarif\FilamentLogger\Loggers\AccessLogger::class,
        'color' => 'danger',
        'log_name' => 'Access',
    ],

    'notifications' => [
        'enabled' => true,
        'logger' => \Afsdarif\FilamentLogger\Loggers\NotificationLogger::class,
        'color' => null,
        'log_name' => 'Notification',
    ],

    'models' => [
        'enabled' => true,
        'log_name' => 'Model',
        'color' => 'warning',
        'logger' => \Afsdarif\FilamentLogger\Loggers\ModelLogger::class,
        'register' => [
            //App\Models\User::class,
        ],
    ],

    'custom' => [
        // [
        //     'log_name' => 'Custom',
        //     'color' => 'primary',
        // ]
    ],
];
