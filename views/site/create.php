<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vacancy */
/* @var $regions [] */
/* @var $categories [] */

$this->title = 'Добавить вакансию';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'regions' => $regions,
        'categories' => $categories
    ]) ?>

</div>
