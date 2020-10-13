<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'da') ?>

    <?= $form->field($model, 'net') ?>

    <?= $form->field($model, 'mb') ?>

    <?= $form->field($model, 'bm') ?>

    <?= $form->field($model, 'nmb') ?>

    <?php // echo $form->field($model, 'aga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
