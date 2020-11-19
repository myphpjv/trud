<?php

use yii\widgets\ListView;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $models \app\models\Vacancy[] */
/* @var $searchModel \app\models\search\SearchVacancy */
/* @var $dataProvider \yii\data\ActiveDataFilter */
/* @var $regions [] */
/* @var $categories [] */

$this->title = 'Вакансии';

?>
<div class="site-index">

    <div class="jumbotron">
        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['/site/create']) ?>">Добавить вакансию</a></p>
    </div>

    <div class="student-form">
        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => Url::to(['/site/index']),
            'options' => [
                'class' => 'filter-form'
            ]
        ]); ?>

        <?= $form->field($searchModel, 'category_id')->dropDownList($categories, ['prompt' => 'Выберите категорию...'])
            ->label(false) ?>

        <?= $form->field($searchModel, 'region_id')->dropDownList($regions, ['prompt' => 'Выберите регион...'])
            ->label(false) ?>

        <?= Html::a('Сбросить', Url::to(['/']), ['class' => 'btn btn-default']) ?>
        <?php ActiveForm::end(); ?>
    </div>

    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_index',
    ]);
    ?>

</div>
