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
    public $color;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'required'],
            ['color', 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => 'Ko-fi ID:',
            'color' => 'Color:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => 'e.g: https://ko-fi.com/<strong>{id}</strong>',
            'color' => 'e.g: Color Code'
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('ko_fi')->settings->get('serverUrl');
        
        $this->color = Yii::$app->getModule('ko_fi')->settings->get('color');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('ko_fi')->settings->set('serverUrl', $this->serverUrl);

        Yii::$app->getModule('ko_fi')->settings->set('color', $this->color);

        return true;
    }

}
