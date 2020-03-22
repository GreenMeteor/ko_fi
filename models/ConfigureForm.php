<?php

namespace humhub\modules\ko_fi\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $text;
    public $serverUrl;
    public $color;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['text', 'required'],
            ['serverUrl', 'required'],
            ['color', 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'text' => 'Text:',
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
            'text' => 'Text',
            'serverUrl' => 'e.g: https://ko-fi.com/<strong>{id}</strong>',
            'color' => 'e.g: https://az743702.vo.msecnd.net/cdn/kofi{number}.png?v=2',
        ];
    }

    public function loadSettings()
    {
        $this->text = Yii::$app->getModule('ko_fi')->settings->get('text');

        $this->serverUrl = Yii::$app->getModule('ko_fi')->settings->get('serverUrl');
        
        $this->color = Yii::$app->getModule('ko_fi')->settings->get('color');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('ko_fi')->settings->set('text', $this->text);

        Yii::$app->getModule('ko_fi')->settings->set('serverUrl', $this->serverUrl);

        Yii::$app->getModule('ko_fi')->settings->set('color', $this->color);

        return true;
    }

}
