<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Loaisanpham */

$this->title = 'Create Loaisanpham';
$this->params['breadcrumbs'][] = ['label' => 'Loaisanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
