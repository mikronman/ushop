<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_products".
 *
 * @property integer $idcampaign_products
 * @property integer $campaign_id
 * @property integer $product_id
 * @property integer $campaign_billing_cycle
 * @property integer $trial_length
 * @property string $trial_price
 * @property string $regular_price
 */
class CampaignProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id', 'product_id'], 'required'],
            [['campaign_id', 'product_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcampaign_products' => 'Idcampaign Products',
            'campaign_id' => 'Campaign ID',
            'product_id' => 'Product ID',
            'campaign_biling_cycle' => 'Campaign Billing Cycle',
            'trial_length' =>'Trial Length',
            'trial_price' => 'Trial Price',
            'regular_price' => 'Regular Price'
        ];
    }
}
