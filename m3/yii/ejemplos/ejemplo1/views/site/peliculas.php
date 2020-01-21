<?php

use yii\helpers\Html;

echo "<div>";
echo Html::a('Peliculas', ['pelicula/index'], ['class' => 'btn btn-lg btn-success']);
echo "</div>";
echo "<span>&nbsp</span>";
echo "<div>";
echo Html::a('Crear pelicula', ['pelicula/create'], ['class' => 'btn btn-lg btn-success']);
echo "</div>";