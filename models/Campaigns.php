<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaigns".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $name
 * @property string $integration_type
 * @property integer $upsell
 * @property string $gateway
 * @property string $currency
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_by
 * @property string $updated_date
 * @property string $product_config
 * @property string $prod_id
 * @property string $prod_name
 * @property string $prod_inv_left
 * @property string $prod_sku
 * @property string $prod_price
 * @property string $prod_search
 * @property integer $enable_tax
 * @property string $post_back_url
 * @property string $url_view_token
 * @property string $url_test
 * @property string $url_order_type
 * @property string $url_order_status
 * @property string $url_order_payments
 * @property string $url_address
 * @property string $returns
 * @property string $promo_coupon_code
 * @property string $enable_third_party_provider
 * @property string $t_p_fulfillment
 * @property string $t_p_anti_fraud
 * @property string $t_p_prospect
 * @property string $t_p_ord_conf
 * @property string $t_p_chargeback
 * @property string $t_p_optimized_cust_outcome
 * @property string $t_p_membership
 * @property string $t_p_tax
 * @property string $t_p_data_verification
 * @property string $t_p_collections
 * @property string $t_p_account_updater
 * @property string $bin_blocking
 * @property integer $block_prepaid_cards
 * @property string $allow_custom_pricing
 * @property string $daily_subscription_limit
 * @property integer $collections_enabled
 */
class Campaigns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaigns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled', 'upsell', 'enable_tax', 'block_prepaid_cards', 'collections_enabled'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            //[['prod_price'], 'required'],
            [['name', /*'integration_type',*/ 'gateway', 'currency', 'created_by', 'updated_by', /*'product_config', 'prod_id', 'prod_name', 'prod_inv_left',*/ 'prod_sku', 'prod_price', /*'prod_search',*/ 'post_back_url', /*'url_view_token', 'url_test',*/  'url_order_type', 'url_order_status', /*'url_order_payments',*/ 'url_address', /*'returns',*/ 'promo_coupon_code', /*'enable_third_party_provider',*/ 't_p_fulfillment', /*'t_p_anti_fraud', 't_p_prospect', 't_p_ord_conf', 't_p_chargeback', 't_p_optimized_cust_outcome', 't_p_membership',*/ 't_p_tax', /*'t_p_data_verification', 't_p_collections', 't_p_account_updater',*/ 'bin_blocking', 'allow_custom_pricing', 'daily_subscription_limit'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'enabled' => 'Enabled',
            'name' => 'Campaign Name',
            //'integration_type' => 'Integration Type',
            'upsell' => 'Upsell',
            'gateway' => 'Gateway',
            'currency' => 'Currency',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
            //'product_config' => 'Product Config',
            'prod_id' => 'Product',
            'prod_name' => 'Product',
            //'prod_inv_left' => 'Prod Inv Left',
            'prod_sku' => 'Prod Sku',
            'prod_price' => 'Product Price',
            //'prod_search' => 'Prod Search',
            'enable_tax' => 'Tax Amount',
            'post_back_url' => 'Post Back Url',
            //'url_view_token' => 'Url View Token',
            //'url_test' => 'Url Test',
            'url_order_type' => 'Url Order Type',
            'url_order_status' => 'Url Order Status',
            //'url_order_payments' => 'Url Order Payments',
            'url_address' => 'Url Address',
            //'returns' => 'Returns',
            'promo_coupon_code' => 'Promo Coupon Code',
            //'enable_third_party_provider' => 'Enable Third Party Provider',
            't_p_fulfillment' => 'T P Fulfillment',
            //'t_p_anti_fraud' => 'T P Anti Fraud',
            //'t_p_prospect' => 'T P Prospect',
            //'t_p_ord_conf' => 'T P Ord Conf',
            //'t_p_chargeback' => 'T P Chargeback',
            //'t_p_optimized_cust_outcome' => 'T P Optimized Cust Outcome',
            //'t_p_membership' => 'T P Membership',
            't_p_tax' => 'T P Tax',
            //'t_p_data_verification' => 'T P Data Verification',
            //'t_p_collections' => 'T P Collections',
            //'t_p_account_updater' => 'T P Account Updater',
            'bin_blocking' => 'Bin Blocking',
            'block_prepaid_cards' => 'Block Prepaid Cards',
            'allow_custom_pricing' => 'Allow Custom Pricing',
            'daily_subscription_limit' => 'Daily Subscription Limit',
            'collections_enabled' => 'Collections Enabled',
        ];
    }
}
