<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmailsOrganizationLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails Organization Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-organization-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Emails Organization Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'log_id',
            'email_organization_id:email',
            'user_id',
            'datetime',
            'name',
            // 'email:email',
            // 'person_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
