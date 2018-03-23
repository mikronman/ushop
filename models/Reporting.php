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
class Reporting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'id', 'campaign_id', 'transaction_id', 'product_id', 'subscription', 'quantity', 'amount_paid', 'upsell_id', 'cc_last_four', 'customer_id', 'payment_gateway_id', 'zip', 'ip', 'routing_number'], 'integer'],
            [[/*'id', 'next_r_date'*/], 'required'],
            [['order_date', 'next_r_date'], 'safe'],
            [['campaign_name', 'product_name', 'tracking_number', 'shipping_status', 'shipping_method', 'payment_type', 'status', 'refund_amount', 'first_name', 'last_name', 'email', 'address', 'address2', 'city', 'state', 'country', 'aff_id', 'sub_aff_id', 'confirm_status', 'rma', 'billing_cycle', 'next_r_product'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'id' => 'ID',
            'campaign_id' => 'Campaign ID',
            'campaign_name' => 'Campaign Name',
            'transaction_id' => 'Transaction ID',
            'product_id' => 'Product ID',
            'subscription' => 'Subscription',
            'quantity' => 'Quantity',
            'product_name' => 'Product Name',
            'amount_paid' => 'Amount Paid',
            'upsell_id' => 'Upsell ID',
            'tracking_number' => 'Tracking Number',
            'shipping_status' => 'Shipping Status',
            'shipping_method' => 'Shipping Method',
            'payment_type' => 'Payment Type',
            'status' => 'Status',
            'refund_amount' => 'Refund Amount',
            'cc_last_four' => 'Credit Card Number',
            'customer_id' => 'Customer ID',
            'payment_gateway_id' => 'Payment Gateway ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'address' => 'Address',
            'address2' => 'Address2',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'country' => 'Country',
            'ip' => 'Ip',
            'aff_id' => 'Aff ID',
            'sub_aff_id' => 'Sub Aff ID',
            'confirm_status' => 'Confirm Status',
            'rma' => 'Rma',
            'billing_cycle' => 'Billing Cycle',
            'routing_number' => 'Routing Number',
            'order_date' => 'Order Date',
            'next_r_date' => 'Next R Date',
            'next_r_product' => 'Next R Product',
        ];
    }
}
