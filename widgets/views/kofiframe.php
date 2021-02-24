<?php

use humhub\libs\Html;

$urlJs = 'https://storage.ko-fi.com/cdn/scripts/overlay-widget.js';
$this->registerJsFile($urlJs);
?>

<div class="panel panel-default ko_fi-snippet" id="ko_fi-snippet">
    <?= Html::beginTag('div') ?>
    <!--<a href='<?= $ko_fiUrl ?>' target='_blank'><img height='36' style='border:0px;height:36px;' src='<?= $color ?>' border='0' alt='Buy us a coffee.' /></a>-->
    <script src='<?= $urlJs ?>'></script>
    <script>
    kofiWidgetOverlay.draw('<?= $ko_fiUrl; ?>', {
        'type': 'floating-chat',
        'floating-chat.donateButton.text': '<?= $text; ?>',
        'floating-chat.donateButton.background-color': '<?= $color ?>',
        'floating-chat.donateButton.text-color': '#fff'

    });
    </script>
    <?= Html::endTag('div'); ?>
</div>
