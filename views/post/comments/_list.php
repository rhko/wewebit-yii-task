<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */
/* @var $postId integer */

?>

<?= GridView::widget([
'dataProvider' => new ActiveDataProvider(['query' => $model->getComments()]),
'columns' => [
    'id',
    'body:ntext',
    [
        'attribute' => 'created_at',
        'format' => ['datetime', 'php:Y-m-d H:i:s'],
    ],
],
]); ?>