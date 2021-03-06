<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Table */

$this->title = 'Update Table: ' . $model->da;
$this->params['breadcrumbs'][] = ['label' => 'Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->da, 'url' => ['view', 'id' => $model->da]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
