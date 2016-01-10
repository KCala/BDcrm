<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmailsOrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-organization-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Emails Organization', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email_organization_id:email',
            'name',
            'email:email',
            'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
