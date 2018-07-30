-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2018 at 07:45 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ushopcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_updater_providers`
--

CREATE TABLE IF NOT EXISTS `account_updater_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alert` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anti_fraud_providers`
--

CREATE TABLE IF NOT EXISTS `anti_fraud_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `api_accounts`
--

CREATE TABLE IF NOT EXISTS `api_accounts` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auto_responder_providers`
--

CREATE TABLE IF NOT EXISTS `auto_responder_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bin_profiles`
--

CREATE TABLE IF NOT EXISTS `bin_profiles` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `prepaid` tinyint(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `black_list`
--

CREATE TABLE IF NOT EXISTS `black_list` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `cc_last_four` int(4) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `routing_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE IF NOT EXISTS `campaigns` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `integration_type` varchar(255) DEFAULT NULL,
  `upsell` tinyint(1) DEFAULT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_config` varchar(255) DEFAULT NULL,
  `prod_id` varchar(255) DEFAULT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `prod_inv_left` varchar(255) DEFAULT NULL,
  `prod_sku` varchar(255) DEFAULT NULL,
  `prod_price` varchar(255) DEFAULT NULL,
  `prod_search` varchar(255) DEFAULT NULL,
  `enable_tax` tinyint(1) DEFAULT NULL,
  `post_back_url` varchar(255) DEFAULT NULL,
  `url_view_token` varchar(255) DEFAULT NULL,
  `url_test` varchar(255) DEFAULT NULL,
  `url_order_type` varchar(255) DEFAULT NULL,
  `url_order_status` varchar(255) DEFAULT NULL,
  `url_order_payments` varchar(255) DEFAULT NULL,
  `url_address` varchar(255) DEFAULT NULL,
  `returns` varchar(255) DEFAULT NULL,
  `promo_coupon_code` varchar(255) DEFAULT NULL,
  `enable_third_party_provider` varchar(255) DEFAULT NULL,
  `t_p_fulfillment` varchar(255) DEFAULT NULL,
  `t_p_anti_fraud` varchar(255) DEFAULT NULL,
  `t_p_prospect` varchar(255) DEFAULT NULL,
  `t_p_ord_conf` varchar(255) DEFAULT NULL,
  `t_p_chargeback` varchar(255) DEFAULT NULL,
  `t_p_optimized_cust_outcome` varchar(255) DEFAULT NULL,
  `t_p_membership` varchar(255) DEFAULT NULL,
  `t_p_tax` varchar(255) DEFAULT NULL,
  `t_p_data_verification` varchar(255) DEFAULT NULL,
  `t_p_collections` varchar(255) DEFAULT NULL,
  `t_p_account_updater` varchar(255) DEFAULT NULL,
  `bin_blocking` varchar(255) DEFAULT NULL,
  `block_prepaid_cards` tinyint(1) DEFAULT NULL,
  `allow_custom_pricing` varchar(255) DEFAULT NULL,
  `daily_subscription_limit` varchar(255) DEFAULT NULL,
  `collections_enabled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_products`
--

CREATE TABLE IF NOT EXISTS `campaign_products` (
  `idcampaign_products` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `campaign_billing_cycle` int(2) DEFAULT NULL,
  `trial_length` int(3) DEFAULT NULL,
  `trial_price` varchar(10) DEFAULT NULL,
  `regular_price` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idcampaign_products`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `campaign_products`
--

INSERT INTO `campaign_products` (`idcampaign_products`, `campaign_id`, `product_id`, `campaign_billing_cycle`, `trial_length`, `trial_price`, `regular_price`) VALUES
(1, 44, 19, NULL, NULL, NULL, NULL),
(2, 58, 21, NULL, NULL, NULL, NULL),
(3, 60, 21, NULL, NULL, NULL, NULL),
(4, 61, 21, 30, 15, '44.00', '56.00'),
(5, 62, 21, 30, 15, '44.00', '56.00'),
(6, 63, 21, 30, 15, '44.00', '56.00'),
(7, 64, 21, 30, 15, '44.00', '56.00'),
(8, 65, 19, 30, 16, '66.00', '25.00'),
(9, 66, 19, 30, 16, '66.00', '25.00'),
(10, 67, 21, 30, 15, '44.00', '56.00'),
(11, 68, 21, 30, 15, '44.00', '56.00'),
(12, 69, 21, 30, 15, '44.00', '56.00'),
(13, 70, 19, 30, 17, '44.00', '56.00'),
(14, 70, 21, 31, 18, '45.00', '57.00'),
(15, 71, 21, NULL, 15, '50', '299'),
(16, 71, 19, 40, 25, '55.00', '20'),
(17, 72, 21, 30, 15, '66.00', '299'),
(18, 72, 19, 35, 16, '99.00', '20'),
(19, 73, 21, 30, 15, '66.00', '299'),
(20, 73, 19, 30, 15, '35', '20');

-- --------------------------------------------------------

--
-- Table structure for table `cascade_profiles`
--

CREATE TABLE IF NOT EXISTS `cascade_profiles` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cascade_gateway` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `total_gateways` varchar(255) DEFAULT NULL,
  `cascade_type` varchar(255) DEFAULT NULL,
  `preserve_gateway_subscription` tinyint(1) DEFAULT NULL,
  `gateways_assigned_to_profile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) DEFAULT NULL,
  `Name` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chargeback_providers`
--

CREATE TABLE IF NOT EXISTS `chargeback_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `date_processed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `number_of_orders` varchar(255) DEFAULT NULL,
  `download` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `collection_providers`
--

CREATE TABLE IF NOT EXISTS `collection_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_profiles`
--

CREATE TABLE IF NOT EXISTS `coupon_profiles` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) DEFAULT NULL,
  `promo_code` varchar(255) DEFAULT NULL,
  `discount_amount` varchar(255) DEFAULT NULL,
  `coupon_usage` varchar(255) DEFAULT NULL,
  `max_use` varchar(255) DEFAULT NULL,
  `exp_date` varchar(255) DEFAULT NULL,
  `coupon_name` varchar(255) DEFAULT NULL,
  `coupon_description` varchar(255) DEFAULT NULL,
  `free_shipping` tinyint(1) DEFAULT NULL,
  `disount_type` varchar(255) DEFAULT NULL,
  `discount_behavior` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `minimum_purchase` varchar(255) DEFAULT NULL,
  `coupon_exp_date` varchar(255) DEFAULT NULL,
  `number_of_uses` varchar(255) DEFAULT NULL,
  `usage_per_customer` varchar(255) DEFAULT NULL,
  `coupon_enabled` tinyint(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `ip` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address`, `address2`, `city`, `state`, `zip`, `country`, `phone`, `email`, `created_by`, `created_date`, `updated_by`, `updated_date`, `notes`, `ip`, `order_id`) VALUES
(1, 'Tom', 'Smith', '123 Somewhere Lane', NULL, 'Cityplace', 'GA', 12345, 'United States', 1231231234, 'test@test.com', NULL, NULL, NULL, NULL, 'None', 1111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_summary`
--

CREATE TABLE IF NOT EXISTS `customer_summary` (
  `new_prospects` varchar(255) DEFAULT NULL,
  `new_customers` varchar(255) DEFAULT NULL,
  `existing_customers` varchar(255) DEFAULT NULL,
  `blacklisted_customer` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_verification_provider`
--

CREATE TABLE IF NOT EXISTS `data_verification_provider` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `declined_orders`
--

CREATE TABLE IF NOT EXISTS `declined_orders` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `decline_reason` varchar(255) DEFAULT NULL,
  `gateway_name` varchar(255) DEFAULT NULL,
  `campaign_name` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `billing_cycle` varchar(255) DEFAULT NULL,
  `in_queue` tinyint(1) DEFAULT NULL,
  `last_attempt_to_reprocess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `decline_reason`
--

CREATE TABLE IF NOT EXISTS `decline_reason` (
  `gateway` varchar(255) DEFAULT NULL,
  `provider_type` varchar(255) DEFAULT NULL,
  `decline_reason` varchar(255) DEFAULT NULL,
  `dec_all` varchar(255) DEFAULT NULL,
  `initial` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `decline_reasons`
--

CREATE TABLE IF NOT EXISTS `decline_reasons` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `reason` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `decline_summary`
--

CREATE TABLE IF NOT EXISTS `decline_summary` (
  `declined_orders_from_prospects` varchar(255) DEFAULT NULL,
  `declined_sub_from_initial_attempt` varchar(255) DEFAULT NULL,
  `declined_sub_from_decline_salvage` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE IF NOT EXISTS `developers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `email_routing`
--

CREATE TABLE IF NOT EXISTS `email_routing` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `authenticated` tinyint(1) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `port` varchar(255) DEFAULT NULL,
  `mail_from_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `action_to_auth_smtp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `email_trigger_events`
--

CREATE TABLE IF NOT EXISTS `email_trigger_events` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email_type` varchar(255) DEFAULT NULL,
  `email_template` varchar(255) DEFAULT NULL,
  `smtp` varchar(255) DEFAULT NULL,
  `total_products` varchar(255) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `export_queue`
--

CREATE TABLE IF NOT EXISTS `export_queue` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `submitted_by` varchar(255) DEFAULT NULL,
  `submitted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `current_status` varchar(255) DEFAULT NULL,
  `processing_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `processing_end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `output_file_link` varchar(255) DEFAULT NULL,
  `campaigns` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `refund_status` varchar(255) DEFAULT NULL,
  `start_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fulfillment_providers`
--

CREATE TABLE IF NOT EXISTS `fulfillment_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `client_api_id` varchar(255) DEFAULT NULL,
  `client_api_key` varchar(255) DEFAULT NULL,
  `receive_tracking` tinyint(1) DEFAULT NULL,
  `receive_returns` tinyint(1) DEFAULT NULL,
  `delay_order_batch` varchar(255) DEFAULT NULL,
  `rma_alert` varchar(255) DEFAULT NULL,
  `void_refund_alert` varchar(255) DEFAULT NULL,
  `shipping_address_alert` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fulfillment_reconciliation`
--

CREATE TABLE IF NOT EXISTS `fulfillment_reconciliation` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `shippable_orders` varchar(255) DEFAULT NULL,
  `shippable_products` varchar(255) DEFAULT NULL,
  `orders_pending_post` varchar(255) DEFAULT NULL,
  `orders_sent_to_fulfillment` varchar(255) DEFAULT NULL,
  `orders_sent_pending_tracking` varchar(255) DEFAULT NULL,
  `shipped_orders` varchar(255) DEFAULT NULL,
  `pending_return` varchar(255) DEFAULT NULL,
  `returned` varchar(255) DEFAULT NULL,
  `avg_days_pending_tracking` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gateway_providers`
--

CREATE TABLE IF NOT EXISTS `gateway_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `gateway_type` varchar(255) DEFAULT NULL,
  `gateway_provider` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `descriptor` varchar(255) DEFAULT NULL,
  `global_monthly_cap` varchar(255) DEFAULT NULL,
  `monthly_sales` varchar(255) DEFAULT NULL,
  `remaining_amount` varchar(255) DEFAULT NULL,
  `transaction_fee` varchar(255) DEFAULT NULL,
  `processing_fee` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gateway_providers`
--

INSERT INTO `gateway_providers` (`id`, `gateway_type`, `gateway_provider`, `alias`, `descriptor`, `global_monthly_cap`, `monthly_sales`, `remaining_amount`, `transaction_fee`, `processing_fee`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, NULL, 'Authorize.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-23 02:19:10', NULL, '0000-00-00 00:00:00'),
(2, NULL, 'NMI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-14 14:17:29', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hard_decline_rules`
--

CREATE TABLE IF NOT EXISTS `hard_decline_rules` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cascade_rule` tinyint(1) DEFAULT NULL,
  `decline_limit` tinyint(1) DEFAULT NULL,
  `decline_reprocess` tinyint(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `import_queue`
--

CREATE TABLE IF NOT EXISTS `import_queue` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `submitted_by` varchar(255) DEFAULT NULL,
  `submitted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `current_status` varchar(255) DEFAULT NULL,
  `processing_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `processing_end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `output_file_link` varchar(255) DEFAULT NULL,
  `input_file_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `unit_type` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `inventory_name` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `automatically_send_reorder_notification` tinyint(1) DEFAULT NULL,
  `tracking` tinyint(1) DEFAULT NULL,
  `low_quantity_limit` varchar(255) DEFAULT NULL,
  `reorder_amount` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `load_balance_profiles`
--

CREATE TABLE IF NOT EXISTS `load_balance_profiles` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `gateway_decline_limit` varchar(255) DEFAULT NULL,
  `total_allocation` varchar(255) DEFAULT NULL,
  `total_revenue_charged` varchar(255) DEFAULT NULL,
  `total_gateways` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) DEFAULT NULL,
  `manufacturer_name` varchar(255) DEFAULT NULL,
  `manufacturer_description` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `membership_providers`
--

CREATE TABLE IF NOT EXISTS `membership_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message_templates`
--

CREATE TABLE IF NOT EXISTS `message_templates` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `order_conf` varchar(255) DEFAULT NULL,
  `shipping_conf` varchar(255) DEFAULT NULL,
  `subscription_conf` varchar(255) DEFAULT NULL,
  `pending_order_conf` varchar(255) DEFAULT NULL,
  `return_notif` varchar(255) DEFAULT NULL,
  `payment_issue_notif` varchar(255) DEFAULT NULL,
  `rma_notif` varchar(255) DEFAULT NULL,
  `cancel_notif` varchar(255) DEFAULT NULL,
  `void_notif` varchar(255) DEFAULT NULL,
  `abandoned_checkout_notif` varchar(255) DEFAULT NULL,
  `email_subject` varchar(255) DEFAULT NULL,
  `template_name` varchar(255) DEFAULT NULL,
  `template_description` varchar(255) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `html_template_body` varchar(255) DEFAULT NULL,
  `plain_text_option` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) DEFAULT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) DEFAULT NULL,
  `campaign_name` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(15) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `subscription` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `amount_paid` varchar(10) DEFAULT NULL,
  `upsell_id` int(11) DEFAULT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `shipping_status` varchar(255) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `refund_amount` varchar(45) DEFAULT NULL,
  `cc_last_four` varchar(20) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `payment_gateway_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `ip` int(11) DEFAULT NULL,
  `aff_id` varchar(255) DEFAULT NULL,
  `sub_aff_id` varchar(255) DEFAULT NULL,
  `confirm_status` varchar(255) DEFAULT NULL,
  `rma` varchar(255) DEFAULT NULL,
  `billing_cycle` varchar(255) DEFAULT NULL,
  `routing_number` int(11) DEFAULT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `next_r_date` date DEFAULT NULL,
  `next_r_product` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `id`, `campaign_id`, `campaign_name`, `transaction_id`, `product_id`, `subscription`, `quantity`, `product_name`, `amount_paid`, `upsell_id`, `tracking_number`, `shipping_status`, `shipping_method`, `payment_type`, `status`, `refund_amount`, `cc_last_four`, `customer_id`, `payment_gateway_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `address2`, `city`, `state`, `zip`, `country`, `ip`, `aff_id`, `sub_aff_id`, `confirm_status`, `rma`, `billing_cycle`, `routing_number`, `order_date`, `next_r_date`, `next_r_product`) VALUES
(NULL, 93, NULL, NULL, NULL, NULL, NULL, 1, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '2147483647', NULL, NULL, 'Michael', 'Kleczka', 'mkleczkajr@gmail.com', 2147483647, '200 Softwood Circle', '', 'Roswell', 'Test', 30076, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, NULL, NULL, NULL),
(NULL, 107, NULL, NULL, '60018606012', NULL, NULL, 2, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '4111111111111111', NULL, NULL, 'Sterling', 'Webb', 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'St Petersburg', 'Florida', 33712, 'USA', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2017-02-22 22:49:51', NULL, NULL),
(NULL, 108, NULL, NULL, NULL, NULL, NULL, NULL, '19', '20', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '0000000000000000', NULL, NULL, 'Michael', 'Kleczka', 'mkleczkajr@gmail.com', 0, '200 Softwood Circle', '', 'Roswell', 'Arkansas', 30076, 'USA', NULL, NULL, NULL, NULL, NULL, 'one', NULL, NULL, NULL, NULL),
(NULL, 109, NULL, NULL, NULL, NULL, NULL, NULL, '19', '20', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '0000000000000000', NULL, NULL, 'Michael', 'Kleczka', 'mkleczkajr@gmail.com', 0, '200 Softwood Circle', '', 'Roswell', NULL, 30076, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, NULL, NULL, NULL),
(NULL, 110, NULL, NULL, '60022396649', NULL, NULL, NULL, '19', '20.00', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '4111111111111111', NULL, NULL, 'Michael', 'Kleczka', 'mkleczkajr@gmail.com', 0, '200 Softwood Circle', '', 'Roswell', 'Test', 30076, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2017-04-20 03:05:03', NULL, NULL),
(NULL, 111, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'select', 'active', NULL, '', NULL, NULL, '', '', '', 0, '', '', '', 'Test', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, 'select', NULL, '2018-04-09 17:51:32', NULL, NULL),
(NULL, 112, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'select', 'active', NULL, '', NULL, NULL, '', '', '', 0, '', '', '', 'Test', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, 'select', NULL, '2018-04-23 17:22:25', NULL, NULL),
(NULL, 113, NULL, NULL, NULL, NULL, NULL, 12, '19', '20', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '41174845454745854', NULL, NULL, 'TestFirstName', 'TestLastName', 'abc@ushopcrm.com', 0, '1234 Somewhere Street', '', 'Manchester', 'New Hampshire', 3102, 'USA', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-04-24 21:41:40', NULL, NULL),
(NULL, 114, NULL, NULL, NULL, NULL, NULL, 2, '19', '20', NULL, NULL, NULL, NULL, 'select', 'active', NULL, '4111111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street', '', 'Tarpon Springs', 'Florida', 34689, 'USA', NULL, NULL, NULL, NULL, NULL, 'select', NULL, '2018-05-15 20:09:45', NULL, NULL),
(NULL, 115, NULL, NULL, NULL, NULL, NULL, NULL, '19', '20', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '4111111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'Tarpon Springs', 'Florida', 34689, 'USA', NULL, NULL, NULL, NULL, NULL, '30', NULL, '2018-05-15 23:27:05', NULL, NULL),
(NULL, 116, NULL, NULL, NULL, NULL, NULL, NULL, '27', '89.95', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '41111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'Tarpon Spring', 'Florida', 34689, 'USA', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-15 23:33:45', NULL, NULL),
(NULL, 117, NULL, NULL, NULL, NULL, NULL, NULL, '27', '89.95', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '41111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'Tarpon Spring', NULL, 34689, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-15 23:34:30', NULL, NULL),
(NULL, 118, NULL, NULL, NULL, NULL, NULL, NULL, '27', '89.95', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '41111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'Tarpon Spring', 'Test', 34689, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-15 23:35:25', NULL, NULL),
(NULL, 119, NULL, NULL, NULL, NULL, NULL, NULL, '27', '89.95', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '41111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'Tarpon Spring', 'Test', 34689, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-15 23:41:18', NULL, NULL),
(NULL, 120, NULL, NULL, '40013844890', NULL, NULL, NULL, '27', '89.95', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '4111111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'Tarpon Spring', 'Test', 34689, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-15 23:42:15', NULL, NULL),
(NULL, 121, NULL, NULL, '40013845184', NULL, NULL, NULL, '27', '89.95', NULL, NULL, NULL, NULL, 'visa', 'active', NULL, '4111111111111111', NULL, NULL, NULL, NULL, 'sterlingwebb@aol.com', 0, '123 Street Rd', '', 'Tarpon Spring', 'Test', 34689, 'Test', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-16 00:09:11', NULL, NULL),
(NULL, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 02:04:07', NULL, NULL),
(NULL, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 02:23:47', NULL, NULL),
(NULL, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 02:27:23', NULL, NULL),
(NULL, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 02:32:35', NULL, NULL),
(NULL, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 02:34:28', NULL, NULL),
(NULL, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 02:36:06', NULL, NULL),
(NULL, 128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 02:38:46', NULL, NULL),
(NULL, 129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 03:10:58', NULL, NULL),
(NULL, 130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 03:20:51', NULL, NULL),
(NULL, 131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 03:22:57', NULL, NULL),
(NULL, 132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 03:27:50', NULL, NULL),
(NULL, 133, NULL, NULL, '4113845022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 03:30:42', NULL, NULL),
(NULL, 134, NULL, NULL, '4114428191', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 14:36:14', NULL, NULL),
(NULL, 135, NULL, NULL, '4114442667', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 14:47:45', NULL, NULL),
(NULL, 136, NULL, NULL, '4114568124', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 16:05:30', NULL, NULL),
(NULL, 137, NULL, NULL, '4114573213', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 16:08:51', NULL, NULL),
(NULL, 138, NULL, NULL, '4114575756', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 16:10:33', NULL, NULL),
(NULL, 139, NULL, NULL, '4114577006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-16 16:11:23', NULL, NULL),
(NULL, 140, NULL, NULL, '4114585811', NULL, NULL, 2, NULL, '89.95', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, '30', NULL, '2018-05-16 16:17:23', NULL, NULL),
(NULL, 141, NULL, NULL, '4114587251', NULL, NULL, 3, NULL, '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, '30', NULL, '2018-05-16 16:18:34', NULL, NULL),
(NULL, 142, NULL, NULL, '4114611641', 19, NULL, 6, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, '30', NULL, '2018-05-16 16:36:46', NULL, NULL),
(NULL, 143, NULL, NULL, '4114624241', 19, NULL, 3, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, '', NULL, 2, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, '30', NULL, '2018-05-16 16:46:46', NULL, NULL),
(NULL, 144, NULL, NULL, '4114633724', 19, NULL, 6, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, '', NULL, 2, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-16 16:54:00', NULL, NULL),
(NULL, 145, NULL, NULL, '4114649791', 19, NULL, 3, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, '0', NULL, 2, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-16 17:04:32', NULL, NULL),
(NULL, 146, NULL, NULL, '4114681000', 19, NULL, 1, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, '', NULL, 2, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'CA', 90210, 'US', NULL, NULL, NULL, NULL, NULL, '30', NULL, '2018-05-16 17:24:39', NULL, NULL),
(NULL, 147, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'select', 'active', NULL, '', NULL, NULL, NULL, NULL, '', 0, '', '', '', 'Test', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, 'select', NULL, '2018-05-16 17:35:06', NULL, NULL),
(NULL, 148, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'select', 'active', NULL, '', NULL, NULL, NULL, NULL, '', 0, '', '', '', 'Test', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, 'select', NULL, '2018-05-16 17:35:12', NULL, NULL),
(NULL, 149, NULL, NULL, '4114757132', 19, NULL, 2, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, '', NULL, 2, 'John', 'Smith', NULL, 555, '123 Main Street', 'Suite 205', 'Beverly Hills', 'California', 90210, 'USA', NULL, NULL, NULL, NULL, NULL, 'one', NULL, '2018-05-16 18:24:34', NULL, NULL),
(NULL, 150, NULL, NULL, '4114775360', 19, NULL, 3, 'Garcinia Cambogia', '20', NULL, NULL, NULL, NULL, NULL, 'active', NULL, '', NULL, 2, 'Sterling', 'Webb', NULL, 215, '123 Street Rd', '305', 'Tarpon Springs', 'Delaware', 34689, 'USA', NULL, NULL, NULL, NULL, NULL, '30', NULL, '2018-05-16 18:40:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_confirmation_providers`
--

CREATE TABLE IF NOT EXISTS `order_confirmation_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_summary`
--

CREATE TABLE IF NOT EXISTS `order_summary` (
  `total_approved_orders` varchar(255) DEFAULT NULL,
  `approved_orders_from_existing_sub` varchar(255) DEFAULT NULL,
  `approved_orders_from_new_sub` varchar(255) DEFAULT NULL,
  `approved_non_sub_orders` varchar(255) DEFAULT NULL,
  `total_decline_orders` varchar(255) DEFAULT NULL,
  `total_refund_orders` varchar(255) DEFAULT NULL,
  `total_shipped_orders` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE IF NOT EXISTS `place_order` (
  `campaign` varchar(255) DEFAULT NULL,
  `campaing_product` varchar(255) DEFAULT NULL,
  `prod_price` varchar(255) DEFAULT NULL,
  `prod_sku` varchar(255) DEFAULT NULL,
  `prod_quantity` varchar(255) DEFAULT NULL,
  `prod_variant` varchar(255) DEFAULT NULL,
  `ship_method` varchar(255) DEFAULT NULL,
  `ship_first_name` varchar(255) DEFAULT NULL,
  `ship_last_name` varchar(255) DEFAULT NULL,
  `ship_address` varchar(255) DEFAULT NULL,
  `ship_address_2` varchar(255) DEFAULT NULL,
  `ship_city` varchar(255) DEFAULT NULL,
  `ship_state` varchar(255) DEFAULT NULL,
  `ship_zip` int(11) DEFAULT NULL,
  `ship_country` varchar(255) DEFAULT NULL,
  `ship_phone` varchar(255) DEFAULT NULL,
  `ship_email` varchar(255) DEFAULT NULL,
  `promo_coupon` varchar(255) DEFAULT NULL,
  `aff_id` varchar(255) DEFAULT NULL,
  `af_id` varchar(255) DEFAULT NULL,
  `a_id` varchar(255) DEFAULT NULL,
  `s_id` varchar(255) DEFAULT NULL,
  `a_c1` varchar(255) DEFAULT NULL,
  `a_c2` varchar(255) DEFAULT NULL,
  `a_c3` varchar(255) DEFAULT NULL,
  `a_opt` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `cc_number` varchar(255) DEFAULT NULL,
  `exp_date` varchar(255) DEFAULT NULL,
  `security_code` varchar(255) DEFAULT NULL,
  `order_product` varchar(255) DEFAULT NULL,
  `order_price` varchar(255) DEFAULT NULL,
  `order_quantity` varchar(255) DEFAULT NULL,
  `order_sub_total` varchar(255) DEFAULT NULL,
  `order_ship_total` varchar(255) DEFAULT NULL,
  `order_tax` varchar(255) DEFAULT NULL,
  `order_grand_total` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prepaid_bins`
--

CREATE TABLE IF NOT EXISTS `prepaid_bins` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `bin` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_sku` varchar(255) DEFAULT NULL,
  `product_price` varchar(11) DEFAULT NULL,
  `subscription` int(11) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_sku`, `product_price`, `subscription`, `product_category`, `product_quantity`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(19, 'Garcinia Cambogia', 'Garcinia Cambogia', 'GC001', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Anit-Wrinkle', 'Test Anti-Wrinkle Product', 'AW1', '89.95', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Colon Cleanse', 'Test', 'c10', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE IF NOT EXISTS `products2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_sku` varchar(255) DEFAULT NULL,
  `product_price` varchar(11) DEFAULT NULL,
  `subscription` int(11) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`id`, `product_name`, `product_description`, `product_sku`, `product_price`, `subscription`, `product_category`, `product_quantity`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(19, 'Garcinia Cambogia', 'Garcinia Cambogia', 'GC001', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Garcinia Cambogia2', 'Garcinia Cambogia 2', 'GC001', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prospects`
--

CREATE TABLE IF NOT EXISTS `prospects` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_name` varchar(255) DEFAULT NULL,
  `shipping_first_name` varchar(255) DEFAULT NULL,
  `shipping_last_name` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_address_2` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_state` varchar(255) DEFAULT NULL,
  `shipping_zip` int(6) DEFAULT NULL,
  `shipping_country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `ip_geo_location` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `af_id` varchar(255) DEFAULT NULL,
  `aff_id` varchar(255) DEFAULT NULL,
  `a_id` varchar(255) DEFAULT NULL,
  `sa_id` varchar(255) DEFAULT NULL,
  `sa_c1` varchar(255) DEFAULT NULL,
  `sa_c2` varchar(255) DEFAULT NULL,
  `sa_c3` varchar(255) DEFAULT NULL,
  `sa_opt` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prospect_providers`
--

CREATE TABLE IF NOT EXISTS `prospect_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE IF NOT EXISTS `returns` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `billing_cycles` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) DEFAULT NULL,
  `subscription_mode` varchar(255) DEFAULT NULL,
  `subscription_level` varchar(255) DEFAULT NULL,
  `campaigns_associated` varchar(255) DEFAULT NULL,
  `rma_expiration_date` date DEFAULT NULL,
  `return_policy_expiration_date` date DEFAULT NULL,
  `prevent_refund_chargebacks` tinyint(1) DEFAULT NULL,
  `refund_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_campaign`
--

CREATE TABLE IF NOT EXISTS `sales_by_campaign` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` varchar(255) DEFAULT NULL,
  `initial` varchar(255) DEFAULT NULL,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `shipping_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `tax_revenue` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_revnue` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `prior_cancels` varchar(255) DEFAULT NULL,
  `cancel_revenue` varchar(255) DEFAULT NULL,
  `chargebacks` varchar(255) DEFAULT NULL,
  `chargeback_revenue` varchar(255) DEFAULT NULL,
  `active_subscription` varchar(255) DEFAULT NULL,
  `average_order` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_customer`
--

CREATE TABLE IF NOT EXISTS `sales_by_customer` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_date`
--

CREATE TABLE IF NOT EXISTS `sales_by_date` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `initial` varchar(255) DEFAULT NULL,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `shipping_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `tax_revenue` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_revenue` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `cancel_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_day`
--

CREATE TABLE IF NOT EXISTS `sales_by_day` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `initial` varchar(255) DEFAULT NULL,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `shipping_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `tax_revenue` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_revnue` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `prior_cancels` varchar(255) DEFAULT NULL,
  `cancel_revenue` varchar(255) DEFAULT NULL,
  `chargebacks` varchar(255) DEFAULT NULL,
  `chargeback_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_gateway`
--

CREATE TABLE IF NOT EXISTS `sales_by_gateway` (
  `gateway` varchar(255) DEFAULT NULL,
  `provider_type` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `global_monthly_cap` varchar(255) DEFAULT NULL,
  `gross_orders` varchar(255) DEFAULT NULL,
  `gross_approved_revenue` varchar(255) DEFAULT NULL,
  `refund_orders` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `net_revenue` varchar(255) DEFAULT NULL,
  `chargebacks` varchar(255) DEFAULT NULL,
  `chargeback_percentage` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_percentage` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_hour`
--

CREATE TABLE IF NOT EXISTS `sales_by_hour` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `initial` varchar(255) DEFAULT NULL,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `shipping_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `tax_revenue` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_revnue` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `prior_cancels` varchar(255) DEFAULT NULL,
  `cancel_revenue` varchar(255) DEFAULT NULL,
  `chargebacks` varchar(255) DEFAULT NULL,
  `chargeback_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_location`
--

CREATE TABLE IF NOT EXISTS `sales_by_location` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_month`
--

CREATE TABLE IF NOT EXISTS `sales_by_month` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `initial` varchar(255) DEFAULT NULL,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `shipping_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `tax_revenue` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_revnue` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `prior_cancels` varchar(255) DEFAULT NULL,
  `cancel_revenue` varchar(255) DEFAULT NULL,
  `chargebacks` varchar(255) DEFAULT NULL,
  `chargeback_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_products`
--

CREATE TABLE IF NOT EXISTS `sales_by_products` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_prospects`
--

CREATE TABLE IF NOT EXISTS `sales_by_prospects` (
  `campaign_name` varchar(255) DEFAULT NULL,
  `prospects` varchar(255) DEFAULT NULL,
  `initial_customers` varchar(255) DEFAULT NULL,
  `conversion_rate` varchar(255) DEFAULT NULL,
  `gross_revenue` varchar(255) DEFAULT NULL,
  `average_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_retention`
--

CREATE TABLE IF NOT EXISTS `sales_by_retention` (
  `campaign` varchar(255) DEFAULT NULL,
  `products` varchar(255) DEFAULT NULL,
  `gross_orders` varchar(255) DEFAULT NULL,
  `net_approved` varchar(255) DEFAULT NULL,
  `subscriptions_approved` varchar(255) DEFAULT NULL,
  `declined` varchar(255) DEFAULT NULL,
  `full_refund` varchar(255) DEFAULT NULL,
  `partial_refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `canceled` varchar(255) DEFAULT NULL,
  `hold` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `approval_rate` varchar(255) DEFAULT NULL,
  `net_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_sku`
--

CREATE TABLE IF NOT EXISTS `sales_by_sku` (
  `sku` int(6) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_subscriptions`
--

CREATE TABLE IF NOT EXISTS `sales_by_subscriptions` (
  `campaign` varchar(255) DEFAULT NULL,
  `attempt` varchar(255) DEFAULT NULL,
  `gross_orders` varchar(255) DEFAULT NULL,
  `approved_orders` varchar(255) DEFAULT NULL,
  `declined_orders` varchar(255) DEFAULT NULL,
  `approved_percentage` varchar(255) DEFAULT NULL,
  `avg_discount_percentage` varchar(255) DEFAULT NULL,
  `approved_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_traffic_referrer_src`
--

CREATE TABLE IF NOT EXISTS `sales_by_traffic_referrer_src` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_week`
--

CREATE TABLE IF NOT EXISTS `sales_by_week` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `initial` varchar(255) DEFAULT NULL,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `shipping_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `tax_revenue` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_revnue` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `prior_cancels` varchar(255) DEFAULT NULL,
  `cancel_revenue` varchar(255) DEFAULT NULL,
  `chargebacks` varchar(255) DEFAULT NULL,
  `chargeback_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_by_year`
--

CREATE TABLE IF NOT EXISTS `sales_by_year` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `initial` varchar(255) DEFAULT NULL,
  `initial_revenue` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscription_revenue` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `shipping_revenue` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `total_revenue` varchar(255) DEFAULT NULL,
  `pending` varchar(255) DEFAULT NULL,
  `pending_revenue` varchar(255) DEFAULT NULL,
  `tax_revenue` varchar(255) DEFAULT NULL,
  `declines` varchar(255) DEFAULT NULL,
  `decline_revnue` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `refund_revenue` varchar(255) DEFAULT NULL,
  `cancels` varchar(255) DEFAULT NULL,
  `prior_cancels` varchar(255) DEFAULT NULL,
  `cancel_revenue` varchar(255) DEFAULT NULL,
  `chargebacks` varchar(255) DEFAULT NULL,
  `chargeback_revenue` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_tax_profiles`
--

CREATE TABLE IF NOT EXISTS `sales_tax_profiles` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `country_sales_tax` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `apply_tax_to_ship` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `tax_level` varchar(255) DEFAULT NULL,
  `total_tax` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `selected_gateway`
--

CREATE TABLE IF NOT EXISTS `selected_gateway` (
  `gateway_id` int(11) NOT NULL,
  PRIMARY KEY (`gateway_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected_gateway`
--

INSERT INTO `selected_gateway` (`gateway_id`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_group`
--

CREATE TABLE IF NOT EXISTS `shipping_group` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) DEFAULT NULL,
  `group_code` varchar(255) DEFAULT NULL,
  `group_description` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updaed_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE IF NOT EXISTS `shipping_methods` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `method_name` varchar(255) DEFAULT NULL,
  `method_description` varchar(255) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `initial_amount` varchar(255) DEFAULT NULL,
  `subscription_amount` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`id`, `method_name`, `method_description`, `group_name`, `initial_amount`, `subscription_amount`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'charge by subtotal', NULL, NULL, NULL, NULL, '2017-01-22 04:10:19', NULL, '0000-00-00 00:00:00'),
(2, 'charge by quantity', NULL, NULL, NULL, NULL, '2017-01-22 05:11:52', NULL, '0000-00-00 00:00:00'),
(3, 'charge by weight', NULL, NULL, NULL, NULL, '2017-01-22 05:12:05', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `smart_tags`
--

CREATE TABLE IF NOT EXISTS `smart_tags` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_forecast_management`
--

CREATE TABLE IF NOT EXISTS `subscription_forecast_management` (
  `total_active_subscriptions` varchar(255) DEFAULT NULL,
  `next_billing_date` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `total_forecast` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_management`
--

CREATE TABLE IF NOT EXISTS `subscription_management` (
  `enable_subscription_billing` tinyint(1) DEFAULT NULL,
  `enable_global_subscription_limit` varchar(255) DEFAULT NULL,
  `decline_salvage_attempts` varchar(255) DEFAULT NULL,
  `decline_salvage_duration` varchar(255) DEFAULT NULL,
  `decline_salvage_discount` tinyint(1) DEFAULT NULL,
  `enable_decline_salvage_percentage` varchar(255) DEFAULT NULL,
  `limit_subscriptions_by_campaign` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_summary`
--

CREATE TABLE IF NOT EXISTS `subscription_summary` (
  `total_gross_sub` varchar(255) DEFAULT NULL,
  `total_active_sub` varchar(255) DEFAULT NULL,
  `sub_on_hold` varchar(255) DEFAULT NULL,
  `sub_cancelled` varchar(255) DEFAULT NULL,
  `reached_next_cycle` varchar(255) DEFAULT NULL,
  `scheduled_to_process` varchar(255) DEFAULT NULL,
  `scheduled_from_initial_attempt` varchar(255) DEFAULT NULL,
  `scheduled_from_decline_salvage` varchar(255) DEFAULT NULL,
  `total_attempted_to_process` varchar(255) DEFAULT NULL,
  `total_approved_from_initial_attempt` varchar(255) DEFAULT NULL,
  `total_approved_from_decline_salvage` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_messages`
--

CREATE TABLE IF NOT EXISTS `system_messages` (
  `type` varchar(255) DEFAULT NULL,
  `priority_level` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `system_message` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tag_automation`
--

CREATE TABLE IF NOT EXISTS `tag_automation` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) DEFAULT NULL,
  `tag_type` varchar(255) DEFAULT NULL,
  `tag_condition` varchar(255) DEFAULT NULL,
  `tag_by_campaign` varchar(255) DEFAULT NULL,
  `tag_by_product` varchar(255) DEFAULT NULL,
  `tag_by_order_total` varchar(255) DEFAULT NULL,
  `tag_by_lifetime_amnt_spent` varchar(255) DEFAULT NULL,
  `tag_by_prod_category` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tax_providers`
--

CREATE TABLE IF NOT EXISTS `tax_providers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test_payment_methods`
--

CREATE TABLE IF NOT EXISTS `test_payment_methods` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `payment_source` varchar(255) DEFAULT NULL,
  `test_types` varchar(255) DEFAULT NULL,
  `test_usage` varchar(255) DEFAULT NULL,
  `test_limit` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `third_party_api`
--

CREATE TABLE IF NOT EXISTS `third_party_api` (
  `provider` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `totals`
--

CREATE TABLE IF NOT EXISTS `totals` (
  `approved_orders` varchar(255) DEFAULT NULL,
  `active_subscription` varchar(255) DEFAULT NULL,
  `hold_subscription` varchar(255) DEFAULT NULL,
  `cancelled_subscription` varchar(255) DEFAULT NULL,
  `declined_orders` varchar(255) DEFAULT NULL,
  `refund_orders` varchar(255) DEFAULT NULL,
  `shipped_orders` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE IF NOT EXISTS `user_accounts` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
--Table Structure for user
--AL 
--
DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
  
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(250) NOT NULL,
  `authKey` varchar(250) NOT NULL,
  `password_reset_token` varchar(250) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `user_level` enum('Super Admin','Admin') NOT NULL DEFAULT 'Admin'
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`);
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


--
-- Table structure for table `user_activity`
--

CREATE TABLE IF NOT EXISTS `user_activity` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `group_name` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitors_by_device`
--

CREATE TABLE IF NOT EXISTS `visitors_by_device` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `device` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitors_by_referrer`
--

CREATE TABLE IF NOT EXISTS `visitors_by_referrer` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `referrer` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE IF NOT EXISTS `warehouse` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `warehouse_name` varchar(255) DEFAULT NULL,
  `warehouse_description` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
