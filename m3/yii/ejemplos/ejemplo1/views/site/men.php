<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Mensaje';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-mensaje">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= $texto ?>
    </p>

</div>
