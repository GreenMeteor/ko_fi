<?php

use humhub\libs\Html;

$urlJs = 'https://storage.ko-fi.com/cdn/scripts/overlay-widget.js';
$this->registerJsFile($urlJs);
?>

<div class="panel panel-default ko_fi-snippet" id="ko_fi-snippet">
    <?= Html::beginTag('div') ?>
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
