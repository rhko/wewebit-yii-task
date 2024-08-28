<?php

namespace app\controllers;

use app\models\Comment;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;

class CommentController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'create' => ['post'],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new Comment();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['post/view', 'id' => $model->post_id]);
        }
    }
}
