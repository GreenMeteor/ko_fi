<?php

namespace humhub\modules\ko_fi;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\modules\ui\menu\MenuLink;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\admin\permissions\ManageModules;

class Events extends BaseObject
{

    public static function onAdminMenuInit($event)
    {
        if (!Yii::$app->user->can(ManageModules::class)) {
            return;
        }

        /** @var AdminMenu $menu */
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => Yii::t('base', 'Ko-fi Settings'),
            'url' => Url::toRoute('/ko_fi/admin/index'),
            'icon' => '<i class="fa fa-coffee"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'ko_fi' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]));
    }

    public static function addKofiFrame($event)
    {
        $event->sender->addWidget(widgets\KofiFrame::class, []);
    }
}
