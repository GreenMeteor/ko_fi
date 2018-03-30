<?php

namespace humhub\modules\ko_fi\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => 'Ko-fi URL:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => 'e.g. https://ko-fi.com/{id}'
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('ko_fi')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('ko_fi')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
