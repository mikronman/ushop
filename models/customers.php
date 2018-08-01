<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $country
 * @property string $state
 * @property integer $zip
 * @property string $email
 * @property integer $phone
 * @property integer $ip
 * @property date $updated_date
 * @property string $updated_by	
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'zip', 'phone', 'ip'], 'integer'],
            [['updated_date'], 'safe'],
            [['first_name', 'last_name', 'address', 'address2', 'city', 'updated_by', 'country', 'state', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'address2' => 'Suite / Apt',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'country' => 'Country',
            'phone' => 'Phone',
            'email' => 'Email',
            'ip' => 'IP Address',
			'updated_by' => 'Updated By',
			'updated_date' => 'Updated Date',
        ];
    }
}
