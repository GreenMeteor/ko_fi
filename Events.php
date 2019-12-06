<?php

namespace humhub\modules\ko_fi;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{

    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Ko-fi Settings',
            'url' => Url::toRoute('/ko_fi/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-coffee"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'ko_fi' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function addKofiFrame($event)
    {
        $event->sender->view->registerAssetBundle(assets\Assets::class);
        $event->sender->addWidget(widgets\KofiFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'ko_fi')
        ]);
    }
}
