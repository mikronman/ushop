<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Campaigns;

/**
 * CampaignsSearch represents the model behind the search form about `app\models\Campaigns`.
 */
class CampaignsSearch extends Campaigns
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'upsell', 'enable_tax', 'block_prepaid_cards', 'collections_enabled'], 'integer'],
            [['name', 'integration_type', 'gateway', 'currency', 'created_by', 'created_date', 'updated_by', 'updated_date', 'product_config', 'prod_id', 'prod_name', 'prod_inv_left', 'prod_sku', 'prod_price', 'prod_search', 'post_back_url', 'url_view_token', 'url_test', 'url_order_type', 'url_order_status', 'url_order_payments', 'url_address', 'returns', 'promo_coupon_code', 'enable_third_party_provider', 't_p_fulfillment', 't_p_anti_fraud', 't_p_prospect', 't_p_ord_conf', 't_p_chargeback', 't_p_optimized_cust_outcome', 't_p_membership', 't_p_tax', 't_p_data_verification', 't_p_collections', 't_p_account_updater', 'bin_blocking', 'allow_custom_pricing', 'daily_subscription_limit'], 'safe'],
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
        $query = Campaigns::find();

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
            'id' => $this->id,
            'enabled' => $this->enabled,
            'upsell' => $this->upsell,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
            'enable_tax' => $this->enable_tax,
            'block_prepaid_cards' => $this->block_prepaid_cards,
            'collections_enabled' => $this->collections_enabled,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'integration_type', $this->integration_type])
            ->andFilterWhere(['like', 'gateway', $this->gateway])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
            ->andFilterWhere(['like', 'product_config', $this->product_config])
            ->andFilterWhere(['like', 'prod_id', $this->prod_id])
            ->andFilterWhere(['like', 'prod_name', $this->prod_name])
            ->andFilterWhere(['like', 'prod_inv_left', $this->prod_inv_left])
            ->andFilterWhere(['like', 'prod_sku', $this->prod_sku])
            ->andFilterWhere(['like', 'prod_price', $this->prod_price])
            ->andFilterWhere(['like', 'prod_search', $this->prod_search])
            ->andFilterWhere(['like', 'post_back_url', $this->post_back_url])
            ->andFilterWhere(['like', 'url_view_token', $this->url_view_token])
            ->andFilterWhere(['like', 'url_test', $this->url_test])
            ->andFilterWhere(['like', 'url_order_type', $this->url_order_type])
            ->andFilterWhere(['like', 'url_order_status', $this->url_order_status])
            ->andFilterWhere(['like', 'url_order_payments', $this->url_order_payments])
            ->andFilterWhere(['like', 'url_address', $this->url_address])
            ->andFilterWhere(['like', 'returns', $this->returns])
            ->andFilterWhere(['like', 'promo_coupon_code', $this->promo_coupon_code])
            ->andFilterWhere(['like', 'enable_third_party_provider', $this->enable_third_party_provider])
            ->andFilterWhere(['like', 't_p_fulfillment', $this->t_p_fulfillment])
            ->andFilterWhere(['like', 't_p_anti_fraud', $this->t_p_anti_fraud])
            ->andFilterWhere(['like', 't_p_prospect', $this->t_p_prospect])
            ->andFilterWhere(['like', 't_p_ord_conf', $this->t_p_ord_conf])
            ->andFilterWhere(['like', 't_p_chargeback', $this->t_p_chargeback])
            ->andFilterWhere(['like', 't_p_optimized_cust_outcome', $this->t_p_optimized_cust_outcome])
            ->andFilterWhere(['like', 't_p_membership', $this->t_p_membership])
            ->andFilterWhere(['like', 't_p_tax', $this->t_p_tax])
            ->andFilterWhere(['like', 't_p_data_verification', $this->t_p_data_verification])
            ->andFilterWhere(['like', 't_p_collections', $this->t_p_collections])
            ->andFilterWhere(['like', 't_p_account_updater', $this->t_p_account_updater])
            ->andFilterWhere(['like', 'bin_blocking', $this->bin_blocking])
            ->andFilterWhere(['like', 'allow_custom_pricing', $this->allow_custom_pricing])
            ->andFilterWhere(['like', 'daily_subscription_limit', $this->daily_subscription_limit]);

        return $dataProvider;
    }
}
