<div class="row">
    <?php


    $actions = Yii::app()->controller->action->id;

    ?>
    <div class="buttonshead">
        <a class="<?php if($actions == 'index') { echo 'btnaktif'; } ?>" href="<?=Yii::app()->createUrl("help/index")?>">Yardım Anasayfa</a>
        <a class="<?php if($actions == 'costumerservice') { echo 'btnaktif'; } ?>" href="<?=Yii::app()->createUrl("help/costumerservice")?>" >Müşteri Hizmetleri</a>
        <a class="<?php if($actions == 'allsubjects') { echo 'btnaktif'; } ?>" href="<?=Yii::app()->createUrl("help/allsubjects ")?>" >Tüm Konular </a>
        <div class="clearfix"></div>
    </div>
</div>
