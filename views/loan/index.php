<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
  <div class="loan-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Loan', ['create'], ['class' => 'btn button-orange']) ?>
</p>

<div class="row">
      <div class="col-6">
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'user_id',
        'amount',
        'interest',
        'duration',
        //'start_date',
        //'end_date',
        //'campaign',
        //'status:boolean',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
</div>
  </div>

