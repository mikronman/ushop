<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $order_id
 * @property integer $id
 * @property integer $campaign_id
 * @property string $campaign_name
 * @property integer $transaction_id
 * @property integer $product_id
 * @property integer $subscription
 * @property integer $quantity
 * @property string $product_name
 * @property integer $amount_paid
 * @property integer $upsell_id
 * @property string $tracking_number
 * @property string $shipping_status
 * @property string $shipping_method
 * @property string $payment_type
 * @property string $status
 * @property integer $cc_last_four
 * @property integer $customer_id
 * @property integer $payment_gateway_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $country
 * @property integer $ip
 * @property string $aff_id
 * @property string $sub_aff_id
 * @property string $confirm_status
 * @property string $rma
 * @property string $billing_cycle
 * @property integer $routing_number
 * @property string $order_date
 * @property string $next_r_date
 * @property string $next_r_product
 */
class Orders extends \yii\db\ActiveRecord
{
    public $first_name = false;
    public $last_name = false;
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
            [['order_id', 'id', 'campaign_id', 'transaction_id', 'product_id', 'subscription', 'quantity', 'amount_paid', 'upsell_id', 'cc_last_four', 'customer_id', 'payment_gateway_id', 'zip', 'ip', 'routing_number'], 'number'],
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
            'campaign_id' => 'Select Campaign',
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
