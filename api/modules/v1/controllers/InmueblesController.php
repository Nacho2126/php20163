<?php

namespace api\modules\v1\controllers;


use yii\rest\ActiveController;
use backend\models\Inmuebles;



class InmueblesController extends ActiveController
{
    public $modelClass = 'backend\models\Inmuebles';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['view']);
        return $actions;
    }

    public function actionView($id){
    	// $inmueble = new Inmuebles();
    	//var_dump($inmueble->primaryKey());die;
    	return Inmuebles::find()->where(['idInmuebles' => $id])->one();
    }

}
?>