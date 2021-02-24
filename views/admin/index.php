<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="panel panel-default">

    <div class="panel-heading"><?= Yii::t('base', '<strong>Ko-fi</strong> module configuration'); ?></div>

    <div class="panel-body">

        <?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>
        <div class="form-group">
            <?= $form->field($model, 'text')->textInput(['class' => 'form-control', 'placeholder' => 'Title', 'disabled' => false])->label(false) ?>
            <?= $form->field($model, 'serverUrl'); ?>
            <?= $form->field($model, 'color'); ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('base', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => '']); ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
