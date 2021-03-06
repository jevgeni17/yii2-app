<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
  <div class="user-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create User', ['create'], ['class' => 'btn button-orange']) ?>
</p>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'first_name:ntext',
        'last_name:ntext',
        'email:ntext',
        'personal_code',
        //'phone',
        //'active:boolean',
        //'dead:boolean',
        //'lang:ntext',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>


</div> 
  </div>
</div>

