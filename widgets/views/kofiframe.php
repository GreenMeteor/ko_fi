<?php

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\ko_fi\Assets::register($this);
?>

<div class="panel panel-default panel-ko_fi" id="panel-ko_fi">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-ko_fi']); ?>
  <div class="panel-heading">
    <?= '<strong>Ko-fi</strong>' ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<a href='<?= $ko_fiUrl ?>' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi2.png?v=0' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
<?= Html::endTag('div'); ?>
</div>
</div>
