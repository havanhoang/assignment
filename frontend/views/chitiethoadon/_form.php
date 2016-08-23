<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chitiethoadon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitiethoadon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaHD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SLMua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DGBan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
