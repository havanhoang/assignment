<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadon */
/* @var $form yii\widgets\ActiveForm */
?>
<?php 
    echo '<label>Check Issue Date</label>';
    echo kartik\date\DatePicker::widget([
        'name' => 'check_issue_date',
        'value' => date('d-M-Y', strtotime('+2 days')),
        'options' => ['placeholder' => 'Select issue date ...'],
        'pluginOptions' => [
            'format' => 'dd-M-yyyy',
            'todayHighLight' => TRUE
        ]
    ]);
?>
<?php 
    echo '<label>Start Time</label>';
    echo \kartik\time\TimePicker::widget([
        'name'=> 'start_time',
        'value' => '11:23 AM',
        'pluginOptions' => [
            'showSeconds' => TRUE
        ]
    ]);
?>
<div class="hoadon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NgayLap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaKH')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
