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
class Shipping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shipping_methods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            //[['method_name', 'method_description'], 'safe'],
            [['method_name','method_description','group_name', 'initial_amount', 'subscription_amount', 'created_date', 'updated_by', 'updated_date'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'method_name' => 'Method Name',
            'group_name' => 'Group Name',
            'initial_amount' => 'Initial Amount',
            'subscription_amount' => 'Subscription Amount',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }
}
