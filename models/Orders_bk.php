<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $upsell_id
 * @property integer $zip
 * @property integer $amount_paid
 * @property integer $campaign_id
 * @property integer $cc_last_four
 * @property integer $ip
 * @property integer $order_id
 * @property integer $payment_gateway_id
 * @property integer $product_id
 * @property integer $quantity
 * @property integer $routing_number
 * @property integer $subscription
 *
 * @property date $next_r_date
 * @property date $order_date
 *
 * @property string $campaign_name
 * @property string $address
 * @property string $address2
 * @property string $aff_id
 * @property string $sub_aff_id
 * @property string $billing_cycle
 * @property string $city
 * @property string $confirm_status
 * @property string $country
 * @property string $customer_id	
 * @property string $email	
 * @property string $first_name	
 * @property string $last_name
 * @property string $next_r_product
 * @property string $payment_type
 * @property string $product_name
 * @property string $rma
 * @property string $shipping_method
 * @property string $shipping_status
 * @property string $state
 * @property string $status
 * @property string $tracking_number
 * @property string $transaction_id	
 */
class Orders extends \yii\db\ActiveRecord
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
            [[
				'id', 
				'zip', 
				'upsell_id', 
				'ip', 
				'amount_paid', 
				'campaign_id', 
				'cc_last_four', 
				'order_id', 
				'payment_gateway_id', 
				'product_id', 
				'quantity', 
				'routing_number', 
				'subscription'
				], 'integer'],
            [[
				'next_r_date',
				'order_date'
				], 'safe'],
            [[
				'campaign_name', 
				'aff_id', 
				'sub_aff_id', 
				'address', 
				'address2', 
				'city',  
				'country', 
				'state', 
				'email', 
				'billing_cycle',
				'confirm_status',
				'customer_id',
				'first_name',
				'last_name',
				'next_r_product',
				'payment_type',
				'product_name',
				'rma',
				'shipping_method',
				'shipping_status',
				'status',
				'tracking_number',
				'transaction_id'
				], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zip' => 'Zip',
            'upsell_id' => 'Upsell ID',
            'ip' => 'Address',
            'amount_paid' => 'Amount Paid',
            'campaign_id' => 'Campaign ID',
            'cc_last_four' => 'Credit Card Number (Last 4)',
            'order_id' => 'Order ID',
            'payment_gateway_id' => 'Payment Gateway ID',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'routing_number' => 'Bank Routing Number',
			'subscription' => 'Subscription',
			'next_r_date' => 'Next Recurring Date',
			'order_date' => 'Order Date',
			'campaign_name' => 'Campaign Name',
			'aff_id' => 'Affiliate ID',
			'sub_aff_id' => 'Sub Affiliate ID',
			'address' => 'Address',
			'address2' => 'Address 2',
			'city' => 'City',
			'country' => 'Country',
			'state' => 'State',
			'email' => 'Email',
			'billing_cycle' => 'Billing Cycle',
			'confirm_status' => 'Confirm Status',
			'customer_id' => 'Customer ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'next_r_product' => 'Next Recurring Product',
			'payment_type' => 'Payment Type',
			'product_name' => 'Product Name',
			'rma' => 'RMA Number',
			'shipping_method' => 'Shipping Method',
			'shipping_status' => 'Shipping Status',
			'status' => 'Order Status',
			'tracking_number' => 'Tracking Number',
			'transaction_id' => 'Transaction ID'
        ];
    }
}
