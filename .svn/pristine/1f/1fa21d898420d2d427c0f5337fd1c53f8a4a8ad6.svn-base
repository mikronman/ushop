<?php

namespace app\controllers;

require 'autoload.php';
require '../vendor/autoload.php';


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use PDO;


class ProductsJs extends Controller
{
   /* public function __construct()
    {

    }

    public function createProductsJS()
    {
        include ('../web/connect.php');
        $stmt = $db->prepare("SELECT * FROM products");

//$bind = $stmt->bindValue(":id", $productId, PDO::PARAM_INT);

        $stmt->execute();

        $productJs = "<script>\n";
        $productJs .= "var productInfo = {\n";


        while($row= $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $productJs .= '"' . $row["product_name"] . '"'. ':' . '{' . "\n" . '"Price":' . $row["product_price"] . "\n". '}, ' . "\n";
        }
        $productJs .= "}\n";
        $productJs .= "</script>\n";
        return $productJs;
    }*/

}

