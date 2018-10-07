<?php

namespace humhub\modules\ko_fi;

return [
    'id' => 'ko_fi',
    'class' => 'humhub\modules\ko_fi\Module',
    'namespace' => 'humhub\modules\ko_fi',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\ko_fi\Events',
                'addKofiFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\ko_fi\Events',
                'addKofiFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\ko_fi\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
