<?php

namespace app\controllers;

require 'autoload.php';
require '../vendor/autoload.php';

use Yii;
use app\models\Gateway;
use yii\db\Query;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class GatewayController extends Controller
{
    public function actionSelect()
    {

        $model = new Gateway();
        //var_dump("Model Load: " . $model->load(Yii::$app->request->post()) && $model->save());

        if(Yii::$app->request->post())
        {
            Yii::$app->db->createCommand()
                         ->update('selected_gateway', ['gateway_id' => Yii::$app->request->post()["GatewayProviders"]["id"]])
                         ->execute();
            return $this->redirect(['select']);
        } else {
            return $this->render('select', [
                'model' => $model,
            ]);
        }
        /*


        if ($model->load(Yii::$app->request->post()) && $model->update()) {
            $gatewayID = Yii::$app->request->post("gateway_id");
            $session = Yii::$app->session;
            $session->open();
            Yii::$app->session['gateway_id'] = $gatewayID;
            return $this->redirect(['select', 'id' => $model->gateway_id]);
        }
          */

    }
}