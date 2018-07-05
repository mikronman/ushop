<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "selected_gateway".
 *
 * @property integer $gateway_id
 */

class Gateway extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'selected_gateway';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gateway_id'], 'number'],
            //[['gateway_id'], 'required'],
            //[['gateway_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gateway_id' => 'Gateway ID',

        ];
    }
}