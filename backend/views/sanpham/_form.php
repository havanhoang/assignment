<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenSP')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'file')->fileInput(); ?>

    <?= $form->field($model, 'SoLuong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MoTa')->textInput(['maxlength' => true]) ?>
   
    <?= $form->field($model, 'MaLoaiSP')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
