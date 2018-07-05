<?php

namespace app\controllers;

require 'autoload.php';
require '../vendor/autoload.php';

use Yii;
use app\models\Orders;
use app\models\OrdersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class OrdersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Orders models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrdersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Orders model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Orders model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Orders();
            //process order
        $processOrder = new \app\controllers\Transactions();
        //$processOrder = $processOrder->processOrder($model, $externalOrder = false);

            if ($model->load(Yii::$app->request->post()) && $model->save() && $processOrder->processOrder($model, $externalOrder = false)) {
                $accountNumber = Yii::$app->request->post("account_number");
                 $session = Yii::$app->session;
                 $session->open();
                 Yii::$app->session['account_number'] = $accountNumber;
                return $this->redirect(['index', 'id' => $model->id, 'transactionResponse' => 'winning']);

            }
            else
                {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }



    }

    public function sendOtherGatewayOrders($data)
    {

            Yii::$app->db->createCommand()
                          ->insert('orders',
                              [
                               'amount_paid' => $data["Orders"]{'amount_paid'},
                               'product_id' => $data["Orders"]{'product_id'},
                               'product_name' => $data["Orders"]{'product_name'},
                               'quantity' => $data["Orders"]{'quantity'},
                               'billing_cycle' => $data["Orders"]{'billing_cycle'},
                               'campaign_id' => $data["Orders"]{'campaign_id'},
                               'first_name' => $data['first_name'],
                               'last_name' => $data['last_name'],
                               'address' => $data['address'],
                               'address2' => $data['address2'],
                               'city' => $data['city'],
                               'state' => $data['Orders']{'state'},
                               'zip' => $data['zip'],
                               'country' => $data['Orders']{'country'},
                               'phone' => $data['phone'],
                               'cc_last_four' => substr($data['billing-cc-number'], -4),
                               'payment_gateway_id' => $data['payment_gateway_id'],
                               'transaction_id' => $data['transaction-id']
                          ])
                          ->execute();
           return $this->redirect(['index']);

    }

    /**
     * Updates an existing Orders model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $accountNumber = $accountNumber = Yii::$app->request->post("account_number");;
            $session = Yii::$app->session;
            $session->open();
            Yii::$app->session['account_number'] = $accountNumber;
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Orders model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Orders model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Orders the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Orders::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionLoadprices()
    {
        $id = $_POST['id'];
        $data = \app\models\Products::find()->select('product_price')->where(['id'=>$id])->one()['product_price'];
        echo $data;
    }

}
