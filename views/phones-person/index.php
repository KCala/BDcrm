<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhonesPersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phones People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phones Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'phone_person_id',
            'name',
            'number',
            'person_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
