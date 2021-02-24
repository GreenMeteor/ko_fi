<?php

namespace humhub\modules\ko_fi\widgets;

use Yii;
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
        $text = Yii::$app->getModule('ko_fi')->getText() . '';

        $url = Yii::$app->getModule('ko_fi')->getServerUrl() . '/';

        $color = Yii::$app->getModule('ko_fi')->getColor();

        return $this->render('kofiframe', ['text' => $text, 'ko_fiUrl' => $url, 'color' => $color]);
    }
}
