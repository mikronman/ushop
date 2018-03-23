<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orders;

/**
 * OrdersSearch represents the model behind the search form about `app\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'id', 'campaign_id', 'transaction_id', 'product_id', 'subscription', 'quantity', 'amount_paid', 'upsell_id', 'cc_last_four', 'customer_id', 'payment_gateway_id', 'zip', 'ip', 'routing_number'], 'integer'],
            [['campaign_name', 'product_name', 'tracking_number', 'shipping_status', 'shipping_method', 'payment_type', 'status', 'first_name', 'last_name', 'email', 'address', 'address2', 'city', 'state', 'country', 'aff_id', 'sub_aff_id', 'confirm_status', 'rma', 'billing_cycle', 'order_date', 'next_r_date', 'next_r_product'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Orders::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'order_id' => $this->order_id,
            'id' => $this->id,
            'campaign_id' => $this->campaign_id,
            'transaction_id' => $this->transaction_id,
            'product_id' => $this->product_id,
            'subscription' => $this->subscription,
            'quantity' => $this->quantity,
            'amount_paid' => $this->amount_paid,
            'upsell_id' => $this->upsell_id,
            'cc_last_four' => $this->cc_last_four,
            'customer_id' => $this->customer_id,
            'payment_gateway_id' => $this->payment_gateway_id,
            'zip' => $this->zip,
            'ip' => $this->ip,
            'routing_number' => $this->routing_number,
            'order_date' => $this->order_date,
            'next_r_date' => $this->next_r_date,
        ]);

        $query->andFilterWhere(['like', 'campaign_name', $this->campaign_name])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'tracking_number', $this->tracking_number])
            ->andFilterWhere(['like', 'shipping_status', $this->shipping_status])
            ->andFilterWhere(['like', 'shipping_method', $this->shipping_method])
            ->andFilterWhere(['like', 'payment_type', $this->payment_type])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'address2', $this->address2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'aff_id', $this->aff_id])
            ->andFilterWhere(['like', 'sub_aff_id', $this->sub_aff_id])
            ->andFilterWhere(['like', 'confirm_status', $this->confirm_status])
            ->andFilterWhere(['like', 'rma', $this->rma])
            ->andFilterWhere(['like', 'billing_cycle', $this->billing_cycle])
            ->andFilterWhere(['like', 'next_r_product', $this->next_r_product]);

        return $dataProvider;
    }
}
