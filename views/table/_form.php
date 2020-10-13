<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Table */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'da')->textInput() ?>

    <?= $form->field($model, 'net')->textInput() ?>

    <?= $form->field($model, 'mb')->textInput() ?>

    <?= $form->field($model, 'bm')->textInput() ?>

    <?= $form->field($model, 'nmb')->textInput() ?>

    <?= $form->field($model, 'aga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
