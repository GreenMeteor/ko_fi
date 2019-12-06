<?php

namespace humhub\modules\ko_fi;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{
    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/ko_fi/admin']);
    }

    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://ko-fi.com';
        }
        return $url;
    }

    public function getColor()
    {
        $color = $this->settings->get('color');
        if (empty($color)) {
            return 'https://az743702.vo.msecnd.net';
        }
        return $color;
    }

    public function getText()
    {
        $text = $this->settings->get('text');
        if (empty($text)) {
            return '';
        }
        return $text;
    }
}
