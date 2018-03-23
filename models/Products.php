<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $product_name
 * @property string $product_description
 * @property string $product_sku
 * @property integer $product_price
 * @property integer $subscription
 * @property string $product_category
 * @property integer $product_quantity
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_by
 * @property string $updated_date
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_price', 'subscription', 'product_quantity'], 'number'],
            [['created_date', 'updated_date'], 'safe'],
            [['product_name', 'product_description', 'product_sku', 'product_category', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Name',
            'product_description' => 'Description',
            'product_sku' => 'Sku',
            'product_price' => 'Price',
            'subscription' => 'Subscription',
            'product_category' => 'Category',
            'product_quantity' => 'Quantity',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }
}
