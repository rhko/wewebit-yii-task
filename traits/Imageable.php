<?php

namespace app\traits;

use Yii;
use yii\web\UploadedFile;

trait Imageable {
    public function uploadImage($model, $field, $dir = 'uploads/')
    {
        $image = UploadedFile::getInstance($model, $field);
        if ($image) {
            $imageName = Yii::$app->security->generateRandomString() . '.' . $image->extension;
            if ($image->saveAs($dir . $imageName)) {
                $model->{$field} = $imageName;
                return true;
            }
        }
        
        return false;
    }
}