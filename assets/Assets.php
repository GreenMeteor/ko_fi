<?php

namespace humhub\modules\ko_fi\assets;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@ko_fi/resources';

    public $url = 'https://ko-fi.com/widgets';

    /**
     * Register CSS and JS file based on version.
     * @param \yii\web\View $view the view that the asset files are to be registered with.
     */
    public function registerAssetFiles($view)
    {
        $this->js = [$this->url . '/widget_2.js'];

        parent::registerAssetFiles($view);
    }
}
