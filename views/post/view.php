<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Post $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'body:ntext',
            [
                'attribute' => 'image',
                'value' => function ($model) {
                    return $model->image ? Html::img('@web/uploads/' . $model->image, ['width' => '100px', 'height' => '100px']) : null;
                },
                'format' => 'html',
            ],
        ],
    ]) ?>

    <hr>

    <h2>Comments</h2>
    <?= $this->render('comments/_comment_form', [
        'model' => new \app\models\Comment(),
        'postId' => $model->id
    ]) ?>

    <?= $this->render('comments/_list', [
        'model' => $model,
    ]) ?>

</div>
