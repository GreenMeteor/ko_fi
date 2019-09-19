<?php

namespace humhub\modules\ko_fi\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => 'Ko-fi ID:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => 'e.g. https://ko-fi.com/<strong>{id}</strong>'
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
