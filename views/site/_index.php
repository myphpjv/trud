<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \app\models\Vacancy */

?>

<div class="col-lg-12 card">
    <h3><?= Html::a($model->title . ', ' . $model->getSalary(), $model->getUrl()) ?></h3>
    <p><?= $model->company ?>, <?= $model->getCategoryName() ?>, <?= $model->getRegionName() ?></p>
    <p><?= $model->getShortDescription() ?></p>
</div>