<?php

namespace humhub\modules\ko_fi;

return [
    'id' => 'ko_fi',
    'class' => 'humhub\modules\ko_fi\Module',
    'namespace' => 'humhub\modules\ko_fi',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\ko_fi\Events',
                'addKofiFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\ko_fi\Events',
                'addKofiFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\ko_fi\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
