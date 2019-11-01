<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;
use humhub\widgets\PanelMenu;

\humhub\modules\ko_fi\Assets::register($this);
?>

<div class="panel panel-default panel-ko_fi" id="panel-ko_fi">
    <?= PanelMenu::widget(['id' => 'panel-ko_fi']); ?>
  <div class="panel-heading">
    <?= '<strong>Ko-fi</strong>' ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<div class="btn-container">
<a title="Support me on ko-fi.com" style="background-color:[user-defined-value];box-shadow: 1px 1px 0px rgba(0, 0, 0, 0.2);line-height: 36px!important;min-width: 150px;display: inline-block!important;padding: 2px 12px !important;text-align: center !important;border-radius: 7px;color: #fff;cursor: pointer;overflow-wrap: break-word;vertical-align: middle;border: 0 none #fff !important;" href="https://ko-fi.com/[user-id]" target="_blank">
<span style="color: #fff !important;letter-spacing: -0.15px!important;text-wrap: none;vertical-align: middle;line-height: 33px !important;padding: 0;text-align: center;text-decoration: none!important;text-shadow: 0 1px 1px rgba(34, 34, 34, 0.05)">
<img src="https://ko-fi.com/img/cup-border.png" class="kofiimg" style="height:20px;vertical-align:-4px">Buy Us a Ko-fi
</span>
</a>
</div>
<?= Html::endTag('div'); ?>
</div>
</div>
