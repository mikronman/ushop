<?php

namespace app\controllers;

use app\models\CampaignProducts;
use app\models\Products;
use app\models\Reporting;
use app\models\ReportingSearch;
use Yii;
use app\models\Campaigns;
use app\models\CampaignsSearch;
use yii\db\Query;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CampaignsController implements the CRUD actions for Campaigns model.
 */
class ReportingController extends Controller
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
     * Lists all Campaigns models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReportingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Campaigns model.
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
     * Creates a new Campaigns model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reporting();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            /*if($model->prod_price == NULL && $model->prod_id != NULL)
            {
                $prodPrice = \app\models\Products::find()->select('product_price')->where(['id'=>$model->prod_id])->one()['product_price'];
                $model->prod_price = $prodPrice;
                $model->save();

            }
                else{
                $prodPrice = $model->prod_price;
                }*/
            $productCount = count(Yii::$app->request->post("dynamProducts"));
            for($x = 0; $x < $productCount; $x++)
            {
                $campaignProducts = new CampaignProducts();
                $campaignProducts->product_id = Yii::$app->request->post("dynamProducts")[$x];
                $campaignProducts->campaign_billing_cycle = Yii::$app->request->post("dynamBillingCycle")[$x];
                $campaignProducts->trial_length = Yii::$app->request->post("dynamTrialLength")[$x];
                $campaignProducts->trial_price = Yii::$app->request->post("dynamTrialPrice")[$x];
                $campaignProducts->regular_price = Yii::$app->request->post("dynamRegPrice")[$x];
                $campaignProducts->campaign_id = $model->id;
                $campaignProducts->isNewRecord = true;
                $campaignProducts->save();
            }

            return $this->redirect(array('view', 'id'=>$model->id, 'productPrice'=> '22'));
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Campaigns model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $campaignProducts = new CampaignProducts();
            $productCount = count(Yii::$app->request->post("dynamProducts"));
            if(Yii::$app->request->post("dynamProducts"))
            {
                for ($x = 0; $x < $productCount; $x++)
                {
                    $campaignProducts = new CampaignProducts();
                    $campaignProducts->product_id = Yii::$app->request->post("dynamProducts")[$x];
                    $campaignProducts->campaign_billing_cycle = Yii::$app->request->post("dynamBillingCycle")[$x];
                    $campaignProducts->trial_length = Yii::$app->request->post("dynamTrialLength")[$x];
                    $campaignProducts->trial_price = Yii::$app->request->post("dynamTrialPrice")[$x];
                    $campaignProducts->regular_price = Yii::$app->request->post("dynamRegPrice")[$x];
                    $campaignProducts->campaign_id = $model->id;
                    $campaignProducts->isNewRecord = true;
                    $existingCampaignProduct = $campaignProducts::find()->where(['product_id' => Yii::$app->request->post("dynamProducts")[0], 'campaign_id' => $id])->exists();
                    if ($existingCampaignProduct) {
                        //it exists

                    } else {
                        //doesn't exist so create record
                        $campaignProducts->save();

                    }
                }
            }
            $existingProductCount = count(Yii::$app->request->post("dynamicExistingProducts"));
            for($x = 0; $x < $existingProductCount; $x++)
            {
                $connection = Yii::$app->db;
                $params = [
                    ':idcampaign_products' => intval(Yii::$app->request->post("idcampaign_product")[$x]),
                    ':existing_products' => intval(Yii::$app->request->post("dynamicExistingProducts")[$x]),
                    ':existing_billing_cycle' => Yii::$app->request->post("dynamicExistingBillingCycle")[$x],
                    ':existing_trial_length' => Yii::$app->request->post("dynamicExistingTrialLength")[$x],
                    ':existing_trial_price' => Yii::$app->request->post("dynamicExistingTrialPrice")[$x],
                    ':existing_reg_price' => Yii::$app->request->post("dynamicExistingRegPrice")[$x]
                ];
                $connection->createCommand()
                    ->update('campaign_products', [
                        'product_id' => $params[':existing_products'],
                        'campaign_billing_cycle' => $params[':existing_billing_cycle'],
                        'trial_length' => $params[':existing_trial_length'],
                        'trial_price' => $params[':existing_trial_price'],
                        'regular_price' => $params[':existing_reg_price']
                    ], ['idcampaign_products' => $params[':idcampaign_products']])
                    ->execute();
                //var_dump($params);

            }


            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Campaigns model.
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
     * Finds the Campaigns model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Campaigns the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Campaigns::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionLoadprices()
    {
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $data = \app\models\Campaigns::find()->select('prod_price')->where(['id' => $id])->one()['prod_price'];
        }
        if(!empty($_POST['product_id']) && !empty($_POST['id']))
        {
            $campaignId = $_POST['id'];
            $productId = $_POST['product_id'];
            $data = \app\models\CampaignProducts::find()->select('trial_price')->where(['campaign_id' => $campaignId, 'product_id' => $productId])->one()['trial_price'];
        }
        if(!empty($_POST['campaign_id']) && !empty($_POST['product_id']))
        {
            $campaignId = $_POST['campaign_id'];
            $productId = $_POST['product_id'];
            $data = \app\models\CampaignProducts::find()->select('trial_price')->where(['campaign_id' => $campaignId, 'product_id' => $productId])->one()['trial_price'];
        }
        echo $data;
    }
    public function actionLoadcampaignproducts()
    {
        $id = $_POST['id'];
        $productID = $_POST['product_id'];
        $query = new Query();
        if(empty($id))
        {
            $query->select(['id', 'product_name'])->from('products');
            $command = $query->createCommand();
            $data = $command->queryAll();
            foreach ($data as $value)
            {

                echo "<option value='" . $value["id"] . "'>" . $value["product_name"] . "</option>";

            }
        }
        else
        {
            $query->select(['campaign_products.campaign_id', 'campaign_products.product_id', 'products.id', 'products.product_name'])->from('campaign_products')->join('join', 'products', 'products.id=campaign_products.product_id')->where(['campaign_id' => $id]);
            $command = $query->createCommand();
            $data = $command->queryAll();
            foreach ($data as $value)
            {
                if(!empty($productID) && $value["product_id"] == $productID)
                {
                    echo "<option selected='selected' value='" . $value["product_id"] . "'>" . $value["product_name"] . "</option>";
                }
                else
                {
                    echo "<option value='" . $value["product_id"] . "'>" . $value["product_name"] . "</option>";
                }
            }
        }
    }
    public function actionLoadcampaignproductsinfo()
    {
        $query = new Query();
        $campaignId = $_POST["campaign_id"];
        $query->select(['campaign_products.idcampaign_products', 'campaign_products.campaign_id', 'campaign_products.product_id', 'campaign_products.campaign_billing_cycle', 'campaign_products.trial_length', 'campaign_products.trial_price', 'campaign_products.regular_price'])
            ->from('campaign_products')
            ->where(['campaign_id' => $campaignId]);
        $command = $query->createCommand();
        $data = $command->queryAll();
        foreach($data as $value)
        {
            echo "<label>Product</label>" .
                "<select class='form-control' name='dynamicExistingProducts[]'><option value>Select Product</option>";
                $query = new Query();
                /*$query->select(['campaign_products.campaign_id', 'campaign_products.product_id', 'products.id', 'products.product_name'])
                    ->from('campaign_products')
                    ->join('join', 'products', 'products.id=campaign_products.product_id')
                    ->where(['campaign_id' => $campaignId]);*/
                $query->select(['id', 'product_name'])
                    ->from('products');
                    $command = $query->createCommand();
                    $productData = $command->queryAll();
                    foreach($productData as $productValue)
                    {
                        if($productValue["id"] == $value["product_id"])
                        {
                            echo "<option selected='selected' value='" . $productValue["id"] . "'>" . $productValue["product_name"] .  "</option>";
                        }
                        else
                        {
                            echo "<option value='" . $productValue["id"] . "'>" . $productValue["product_name"] .  "</option>";
                        }

                    }
                   echo "</select>" .
                "<label>Campaign Billing Cycle</label><input name='dynamicExistingBillingCycle' class='form-control' type='text' value='" . $value["campaign_billing_cycle"] . "' />" .
                "<label>Trial Length</label><input name='dynamicExistingTrialLength' class='form-control' type='text' value='" . $value["trial_length"] . "' />" .
                "<label>Trial Length</label><input name='dynamicExistingTrialPrice' class='form-control' type='text' value='" . $value["trial_price"] . "' />" .
                "<label>Trial Length</label><input name='dynamicExistingRegPrice' class='form-control' type='text' value='" . $value["regular_price"] . "' />" .
                       "<input type='hidden' name='idcampaign_product[]' value='" . $value["idcampaign_products"] . "' />" .
                "<hr />";
        }

    }
    public function actionLoadcampaigns()
    {
        $productId = $_POST['product_id'];
        $campaignId = $_POST['campaign_id'];
        $query = new Query();
        $query->select(['campaign_products.campaign_id', 'campaign_products.product_id', 'products.id', 'products.product_name', 'campaigns.name'])
            ->from('campaign_products')
            ->join('join', 'products', 'products.id = campaign_products.product_id')
            ->join('join', 'campaigns', 'campaigns.id = campaign_products.campaign_id')
            ->where(['product_id' => $productId]);
        $command = $query->createCommand();
        $data = $command->queryAll();
        foreach ($data as $value)
        {
            if(!empty($campaignId) && $value["campaign_id"] == $campaignId)
            {
                echo "<option selected='selected' value='" . $value["campaign_id"] . "'>" . $value["name"] . "</option>";
            }
            else
            {
                echo "<option value='" . $value["campaign_id"] . "'>" . $value["name"] . "</option>";
            }

        }
    }
}
