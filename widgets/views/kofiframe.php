<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;
use humhub\widgets\PanelMenu;
use humhub\modules\ko_fi\assets\Assets;

Assets::register($this);
?>

<div class="panel panel-default ko_fi-snippet" id="ko_fi-snippet">
    <?= PanelMenu::widget(['id' => 'ko_fi-snippet']); ?>
  <div class="panel-heading">
    <p><?= $text; ?></p>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<a href='<?= $ko_fiUrl; ?>' target='_blank'><img height='36' style='border:0px;height:36px;' src='<?= $color; ?>' border='0' alt='Buy us a coffee.' /></a>
<?= Html::endTag('div'); ?>
</div>
</div>
