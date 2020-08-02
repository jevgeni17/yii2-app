<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components;

/* @var $this yii\web\View */
/* @var $model app\models\User */

function getAgeFromPersonalCode($personal_code)
{
	$personal_code = strval($personal_code);

	if($personal_code[0] == 1 || $personal_code[0] == 2){

		return calculateAge(substr($personal_code, 1, 6), '18');

	}elseif ($personal_code[0] == 3 || $personal_code[0] == 4) {

		return calculateAge(substr($personal_code, 1, 6), '19');

	}else{

		return	calculateAge(substr($personal_code, 1, 6), '20');

	}
}


 function calculateAge($birthday, $century)
{
	$birthday = $century.$birthday;

	$age =  date("Ymd")-date($birthday);	

	$age =  substr($age, 0, -4);

	if ($age < 0) {
		$age = 0;
	}

	return $age;

}
	
   
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
  <div class="user-view">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>
</p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'first_name:ntext',
        'last_name:ntext',
        'email:ntext',
        'personal_code',
        'phone',
        'active:boolean',
        'dead:boolean',
        'lang:ntext',
        [
            'label' => 'Age',
            'value' =>  getAgeFromPersonelCode($model->personal_code),
        ],
    ],
]) ?>

</div>

  </div>
</div>
