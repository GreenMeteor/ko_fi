<?php

namespace humhub\modules\ko_fi;

use Yii;
use yii\helpers\Url;
use humhub\modules\ko_fi\widgets\KofiFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
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
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(KofiFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'ko_fi')
        ]);
    }
}
