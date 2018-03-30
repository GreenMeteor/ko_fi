<?php

namespace humhub\modules\ko_fi\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class KofiFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('ko_fi')->getServerUrl() . '/';
        return $this->render('kofiframe', ['ko_fiUrl' => $url]);
    }
}
