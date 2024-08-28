<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */
/* @var $postId integer */

?>

<div class="comment-form">

    <?php  $form = ActiveForm::begin(['action' =>['comment/create'], 'id' => 'comment_post', 'method' => 'post']); ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 2]) ?>

    <?= Html::activeHiddenInput($model, 'post_id', ['value' => $postId]) ?>

    <div class="form-group">
        <?= Html::submitButton('Add Comment', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
