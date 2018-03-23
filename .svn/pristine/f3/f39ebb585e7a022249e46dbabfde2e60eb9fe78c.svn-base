<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gateway_providers".
 *
 * @property integer $id
 * @property string $gateway_type
 * @property string $gateway_provider
 * @property string $alias
 * @property string $descriptor
 * @property string $global_monthly_cap
 * @property string $monthly_sales
 * @property string $remaining_amount
 * @property string $transaction_fee
 * @property string $processing_fee
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_by
 * @property string $updated_date
 */
class GatewayProviders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gateway_providers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_date', 'updated_date'], 'safe'],
            [['gateway_type', 'gateway_provider', 'alias', 'descriptor', 'global_monthly_cap', 'monthly_sales', 'remaining_amount', 'transaction_fee', 'processing_fee', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gateway_type' => 'Gateway Type',
            'gateway_provider' => 'Gateway Provider',
            'alias' => 'Alias',
            'descriptor' => 'Descriptor',
            'global_monthly_cap' => 'Global Monthly Cap',
            'monthly_sales' => 'Monthly Sales',
            'remaining_amount' => 'Remaining Amount',
            'transaction_fee' => 'Transaction Fee',
            'processing_fee' => 'Processing Fee',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }
}
