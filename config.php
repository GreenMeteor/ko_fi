<?php

namespace humhub\modules\ko_fi;

use humhub\modules\ko_fi\Events;
use humhub\modules\ko_fi\Module;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\dashboard\widgets\Sidebar;
use humhub\modules\space\widgets\Sidebar as Spacebar;

return [
    'id' => 'ko_fi',
    'class' => Module::class,
    'namespace' => 'humhub\modules\ko_fi',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [Events::class, 'addKofiFrame']],
        ['class' => Spacebar::class, 'event' => Spacebar::EVENT_INIT, 'callback' => [Events::class, 'addKofiFrame']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>
