<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vacancy */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-view">

    <h3><?= Html::encode($this->title) ?>, <?= $model->getSalary() ?></h3>

    <div class="col-lg-12 vacancy-singe">
        <p><?= $model->getCreatedAt() ?></p>
        <p><?= $model->company ?>, <?= $model->getCategoryName() ?>, <?= $model->getRegionName() ?></p>
        <p><?= $model->description ?></p>
        <p>Просмотры: <?= $model->views ?></p>
    </div>
    <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Удалить вакансию?',
            'method' => 'post',
        ],
    ]) ?>

</div>
