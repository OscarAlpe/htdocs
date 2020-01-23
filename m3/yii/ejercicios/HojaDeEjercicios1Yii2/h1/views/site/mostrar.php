<?php
    use yii\grid\GridView;
?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "Mostando {begin} - {end} de {totalCount} elementos",
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
            ],
            'id',
            'texto',
        ],
]); ?>