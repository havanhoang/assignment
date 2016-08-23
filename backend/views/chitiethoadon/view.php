<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chitiethoadon */

$this->title = $model->MaSP;
$this->params['breadcrumbs'][] = ['label' => 'Chitiethoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitiethoadon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaSP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaSP], [
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
            'MaSP',
            'MaHD',
            'SLMua',
            'DGBan',
        ],
    ]) ?>

</div>
