-- 05-05-2025
ALTER TABLE `madmins` CHANGE `role_id` `role_id` INT(11) NULL DEFAULT '2';

truncate order_addresses;
truncate order_details;
truncate order_payments;
truncate orderhistries;
truncate orders;
-- truncate products;
-- truncate product_tags;
-- truncate product_stocks;

-- 01-06-2025
ALTER TABLE `customers` CHANGE `email` `email` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;

-- 02-06-2025
CREATE TABLE `visitors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `referer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `visitors` (`ip`, `country`, `city`, `browser`, `platform`, `device`, `referer`, `created_at`, `updated_at`) VALUES
-- June 1
('192.168.1.1', 'United States', 'New York', 'Chrome', 'Windows', 'Desktop', 'https://google.com', '2025-06-01 10:15:00', '2025-06-01 10:15:00'),
('203.0.113.5', 'India', 'Mumbai', 'Firefox', 'Linux', 'Laptop', 'https://example.com', '2025-06-01 11:00:00', '2025-06-01 11:00:00'),
-- June 2
('198.51.100.8', 'Germany', 'Berlin', 'Safari', 'macOS', 'Desktop', 'https://github.com', '2025-06-02 13:25:00', '2025-06-02 13:25:00'),
('203.0.113.7', 'Brazil', 'São Paulo', 'Edge', 'Windows', 'Tablet', 'https://facebook.com', '2025-06-02 09:00:00', '2025-06-02 09:00:00'),
('192.0.2.10', 'Japan', 'Tokyo', 'Chrome', 'Android', 'Mobile', 'https://linkedin.com', '2025-06-02 10:30:00', '2025-06-02 10:30:00'),
-- June 3
('198.51.100.12', 'France', 'Paris', 'Opera', 'Windows', 'Desktop', 'https://twitter.com', '2025-06-03 11:45:00', '2025-06-03 11:45:00'),
('203.0.113.11', 'Canada', 'Toronto', 'Chrome', 'iOS', 'Mobile', 'https://youtube.com', '2025-06-03 13:15:00', '2025-06-03 13:15:00'),
-- June 4
('192.0.2.13', 'Australia', 'Sydney', 'Firefox', 'Linux', 'Desktop', 'https://openai.com', '2025-06-04 08:20:00', '2025-06-04 08:20:00'),
('203.0.113.14', 'South Korea', 'Seoul', 'Safari', 'macOS', 'Laptop', 'https://naver.com', '2025-06-04 09:50:00', '2025-06-04 09:50:00'),
-- June 5
('198.51.100.15', 'UK', 'London', 'Edge', 'Windows', 'Desktop', 'https://bbc.com', '2025-06-05 10:40:00', '2025-06-05 10:40:00'),
('203.0.113.21', 'Mexico', 'Mexico City', 'Chrome', 'Android', 'Mobile', 'https://reddit.com', '2025-06-05 11:25:00', '2025-06-05 11:25:00'),
-- June 6
('192.0.2.22', 'Russia', 'Moscow', 'Firefox', 'Windows', 'Laptop', 'https://vk.com', '2025-06-06 10:15:00', '2025-06-06 10:15:00'),
('198.51.100.23', 'Nigeria', 'Lagos', 'Safari', 'iOS', 'Mobile', 'https://nairaland.com', '2025-06-06 14:00:00', '2025-06-06 14:00:00'),
-- June 7
('203.0.113.24', 'Italy', 'Rome', 'Chrome', 'macOS', 'Desktop', 'https://stackoverflow.com', '2025-06-07 09:35:00', '2025-06-07 09:35:00'),
('198.51.100.25', 'Spain', 'Madrid', 'Edge', 'Windows', 'Tablet', 'https://elpais.com', '2025-06-07 10:50:00', '2025-06-07 10:50:00');

-- 22-06-2025
CREATE TABLE `cs_settings` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

  -- General Info
  `site_title` VARCHAR(255) DEFAULT NULL,
  `store_name` VARCHAR(100) DEFAULT NULL,
  `address` TEXT DEFAULT NULL,
  `email` VARCHAR(50) DEFAULT NULL,
  `phone` VARCHAR(200) DEFAULT NULL,

  -- Branding & Logos
  `logo` VARCHAR(50) DEFAULT NULL,
  `splash_logo` VARCHAR(255) NOT NULL,
  `favicon` VARCHAR(100) DEFAULT NULL,

  -- VAT and Service Charges
  `vat` INT DEFAULT 0,
  `show_vat_number` TINYINT(1) DEFAULT 0,
  `vat_number` VARCHAR(30) DEFAULT NULL,
  `service_charge` INT DEFAULT 0,
  `discount_type` TINYINT DEFAULT 0 COMMENT '0 = amount, 1 = percent',
  `service_charge_type` TINYINT DEFAULT 0 COMMENT '0 = amount, 1 = percent',
  `discount_rate` DECIMAL(19,3) DEFAULT 0.000,

  -- Location & Language
  `country` VARCHAR(100) DEFAULT NULL,
  `google_map_embed_link` TEXT DEFAULT NULL,
  `latitude` VARCHAR(10) DEFAULT NULL,
  `longitude` VARCHAR(10) DEFAULT NULL,
  `currency_id` INT DEFAULT 0,
  `language` VARCHAR(100) DEFAULT NULL,
  `timezone` VARCHAR(150) NOT NULL,

  -- Formatting
  `date_format` TEXT NOT NULL,
  `site_alignment` VARCHAR(50) DEFAULT NULL,

  -- Footer and Texts
  `powered_by_text` TEXT DEFAULT NULL,
  `footer_text` VARCHAR(255) DEFAULT NULL,

  -- Contact & API Credentials (Commented out fields are excluded)

  -- Refund & Approvals
  `refund_restriction` TINYINT(1) DEFAULT 0 COMMENT '0 = refund allowed',
  `refund_auto_approve` TINYINT(1) DEFAULT 1 COMMENT '1 = auto-approve refunds',
  `refund_deduction_percent` DECIMAL(10,2) DEFAULT 0.00,

  -- Inventory System
  `inventory_type` TINYINT DEFAULT 1 COMMENT '1 = Periodic, 2 = Perpetual',

  -- Timestamps
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 23-06-2025
DROP TABLE IF EXISTS `cs_currencies`;
CREATE TABLE `cs_currencies` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(50) NOT NULL,
  `icon` VARCHAR(50) NOT NULL,
  `position` INT(11) NOT NULL DEFAULT 1 COMMENT '1=left.2=right',
  `rate` DECIMAL(10,2) DEFAULT NULL,

  -- Timestamps
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `cs_currencies` (`title`, `icon`, `position`, `rate`, `created_at`, `updated_at`) VALUES
('USD', '$', 1, 1.00, NOW(), NOW()),
('EUR', '€', 1, 0.85, NOW(), NOW()),
('GBP', '£', 1, 0.75, NOW(), NOW()),
('INR', '₹', 1, 73.00, NOW(), NOW()),
('JPY', '¥', 1, 110.00, NOW(), NOW());

-- payment methods
CREATE TABLE `cs_payment_methods` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(100) NOT NULL,
  `icon` VARCHAR(100) DEFAULT NULL,
  `description` TEXT DEFAULT NULL,
  `is_active` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  
  -- Timestamps
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cs_payment_methods` (`title`, `icon`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
('Cash on Delivery', 'cash-icon.png', 'Pay with cash upon delivery.', 1, NOW(), NOW()),
('Credit Card', 'credit-card-icon.png', 'Pay using your credit card.', 1, NOW(), NOW()),
('PayPal', 'paypal-icon.png', 'Secure online payment via PayPal.', 1, NOW(), NOW()),
('Bank Transfer', 'bank-transfer-icon.png', 'Direct bank transfer for payments.', 1, NOW(), NOW());

-- 24-06-2025
CREATE TABLE `cs_payment_setups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `payment_method_id` int(11) NOT NULL,
  `marchantid` varchar(255) DEFAULT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `currency_id` int(11) DEFAULT 0,
  `is_live` int(11) NOT NULL,
  `api_code` varchar(25) DEFAULT NULL,
  `api_key` varchar(300) DEFAULT NULL,
  `api_endpoint` varchar(200) DEFAULT NULL,
  `api_user_secret` varchar(300) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=active 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- 24-06-2025--
ALTER TABLE `cs_settings`
ADD COLUMN `facebook` VARCHAR(255) DEFAULT NULL AFTER `footer_text`,
ADD COLUMN `twitter` VARCHAR(255) DEFAULT NULL AFTER `facebook`,
ADD COLUMN `linkedin` VARCHAR(255) DEFAULT NULL AFTER `twitter`,
ADD COLUMN `instagram` VARCHAR(255) DEFAULT NULL AFTER `linkedin`,
ADD COLUMN `youtube` VARCHAR(255) DEFAULT NULL AFTER `instagram`,
ADD COLUMN `tiktok` VARCHAR(255) DEFAULT NULL AFTER `youtube`;

-- 24-06-2025
DROP TABLE `contacts`, `socialmedia`;
-- 24-06-2025

DROP TABLE IF EXISTS `sms_configs`;
CREATE TABLE `cs_sms_configs` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `provider` VARCHAR(100) NOT NULL,
  `username` VARCHAR(155) NOT NULL COMMENT 'API Key',
  `password` VARCHAR(155) NOT NULL COMMENT 'API Secret',
  `phone` VARCHAR(20) DEFAULT NULL,
  `sender_name` VARCHAR(155) DEFAULT NULL,
  `is_invoice` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_purchase` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_receive` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_payment` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_active` TINYINT(1) DEFAULT 1 COMMENT '1 = active, 0 = No',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `mail_configs`;
CREATE TABLE `cs_mail_configs` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `protocol` varchar(100) NOT NULL,
  `smtp_host` varchar(100) NOT NULL,
  `smtp_port` varchar(100) NOT NULL,
  `smtp_user` varchar(100) NOT NULL,
  `smtp_pass` varchar(100) NOT NULL,
  `mail_type` varchar(100) NOT NULL,
  `is_invoice` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_purchase` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_receive` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_payment` TINYINT(1) DEFAULT 0 COMMENT '1 = Yes, 0 = No',
  `is_active` TINYINT(1) DEFAULT 1 COMMENT '1 = active, 0 = No',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `cs_settings` (
  `id` bigint(20) unsigned NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `store_name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `splash_logo` varchar(255) DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `vat` int(11) DEFAULT 0,
  `show_vat_number` tinyint(1) DEFAULT 0,
  `vat_number` varchar(30) DEFAULT NULL,
  `service_charge` int(11) DEFAULT 0,
  `discount_type` tinyint(4) DEFAULT 0 COMMENT '0 = amount, 1 = percent',
  `service_charge_type` tinyint(4) DEFAULT 0 COMMENT '0 = amount, 1 = percent',
  `discount_rate` decimal(19,3) DEFAULT 0.000,
  `country` varchar(100) DEFAULT NULL,
  `google_map_embed_link` text DEFAULT NULL,
  `latitude` varchar(10) DEFAULT NULL,
  `longitude` varchar(10) DEFAULT NULL,
  `currency_id` int(11) DEFAULT 0,
  `language` varchar(100) DEFAULT NULL,
  `timezone` varchar(150) DEFAULT NULL,
  `date_format` text DEFAULT NULL,
  `site_alignment` varchar(50) DEFAULT NULL,
  `powered_by_text` text DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `refund_restriction` tinyint(1) DEFAULT 0 COMMENT '0 = refund allowed',
  `refund_auto_approve` tinyint(1) DEFAULT 1 COMMENT '1 = auto-approve refunds',
  `refund_deduction_percent` decimal(10,2) DEFAULT 0.00,
  `inventory_type` tinyint(4) DEFAULT 1 COMMENT '1 = Periodic, 2 = Perpetual',
  `invoice_company` varchar(155) DEFAULT NULL,
  `invoice_email` varchar(155) DEFAULT NULL,
  `invoice_logo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE `cs_payment_methods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `is_web` int(1) DEFAULT 1 COMMENT '1=show website.2=not show website',
  `acc_coa_id` bigint(20) unsigned DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=active 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `payment_setups`;
CREATE TABLE `cs_payment_setups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `payment_method_id` int(11) NOT NULL,
  `marchantid` varchar(255) DEFAULT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `currency_id` int(11) DEFAULT 0,
  `is_live` int(11) NOT NULL,
  `api_code` varchar(25) DEFAULT NULL,
  `api_key` varchar(300) DEFAULT NULL,
  `api_endpoint` varchar(200) DEFAULT NULL,
  `api_user_scret` varchar(300) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=active 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `cs_currencies` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(50) NOT NULL,
  `icon` VARCHAR(50) NOT NULL,
  `position` INT(11) NOT NULL DEFAULT 1 COMMENT '1=left.2=right',
  `rate` DECIMAL(10,2) DEFAULT NULL,

  -- Timestamps
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `cs_currencies` (`title`, `icon`, `position`, `rate`, `created_at`, `updated_at`) VALUES
('USD', '$', 1, 1.00, NOW(), NOW()),
('EUR', '€', 1, 0.85, NOW(), NOW()),
('GBP', '£', 1, 0.75, NOW(), NOW()),
('INR', '₹', 1, 73.00, NOW(), NOW()),
('JPY', '¥', 1, 110.00, NOW(), NOW());

ALTER TABLE hotel_csl.cs_payment_methods
ADD COLUMN code VARCHAR(50) DEFAULT NULL COMMENT 'unique code for payment' AFTER title,
ADD UNIQUE INDEX idx_code_unique (code);

-- 25-06-2025
DROP TABLE IF EXISTS `cs_payment_methods`;
CREATE TABLE `cs_payment_methods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `code` varchar(50) DEFAULT NULL COMMENT 'unique code for payment',
  `is_web` int(1) DEFAULT 1 COMMENT '1=show website.2=not show website',
  `acc_coa_id` bigint(20) unsigned DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=active 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `cs_payment_methods` (`id`, `title`, `code`, `is_web`, `acc_coa_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Cash on Hand', 'CS-COH', 0, 10000, 1, '2025-06-24 11:29:57', '2025-06-24 11:29:57'),
(2, 'Cash on Delivery', 'CS-COD', 1, 400, 1, '2025-06-24 18:00:00', '2025-06-24 18:00:00'),
(3, 'SSLCommerz ', 'CS-SSLCOM', 1, NULL, 1, '2025-06-24 18:00:00', '2025-06-24 18:00:00'),
(4, 'bKash ', 'CS-BKASH', 1, NULL, 1, '2025-06-24 18:00:00', '2025-06-24 18:00:00'),
(5, 'Nagad', 'CS-NAGAD', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(6, 'Razorpay', 'CS-RAZORPAY', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(7, 'Paytm', 'CS-PAYTM', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(8, 'Google Pay', 'CS-GPAY', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(9, 'Alipay', 'CS-ALIPAY', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(10, 'WebMoney', 'CS-WEBMONEY', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(11, 'ShopeePay', 'CS-SHOPEEPAY', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(12, 'Stripe', 'CS-STRIPE', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(13, 'Square', 'CS-SQUARE', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(14, 'Amazon Pay', 'CS-AMAZONPAY', 1, NULL, 1, '2025-06-24 18:00:00', '2025-06-25 00:20:37'),
(15, 'PayPal', 'CS-PAYPAL', 0, NULL, 1, '2025-06-24 18:00:00', NULL),
(16, 'Rocket', 'CS-ROCKET', 0, NULL, 1, '2025-06-24 18:00:00', NULL);

-- 26-06-2025
ALTER TABLE hotel_csl.cs_currencies
ADD is_active TINYINT(1) DEFAULT '1' COMMENT 'active = 1, inactive = 0' AFTER rate;
-- 27-06-2025
UPDATE products
SET
  thumb = IF(thumb NOT LIKE 'public/uploads/images/products/%',
             CONCAT('public/uploads/images/products/', thumb),
             thumb),
  images = IF(images NOT LIKE 'public/uploads/images/products/%',
              CONCAT('public/uploads/images/products/', images),
              images),
  gallery = CASE
    WHEN gallery IS NOT NULL AND gallery != '' AND gallery NOT LIKE 'public/uploads/images/products/%'
    THEN CONCAT('public/uploads/images/products/', 
                REPLACE(gallery, ',', ',public/uploads/images/products/')
         )
    ELSE gallery
  END;

 -- 28-06-2025
 DROP TABLE IF EXISTS `cs_currencies`;
  CREATE TABLE `cs_currencies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `position` int(11) NOT NULL DEFAULT 1 COMMENT '1=left.2=right',
  `rate` decimal(10,5) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT 'active = 1, inactive = 0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `cs_currencies` (`id`, `title`, `icon`, `position`, `rate`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'BDT', '৳', 1, 1.00, 1, NOW(), NOW()),   -- base currency
(2, 'USD', '$', 1, 0.0091, 1, NOW(), NOW()),
(3, 'EUR', '€', 1, 0.0083, 1, NOW(), NOW()),
(4, 'GBP', '£', 1, 0.75000, 1, NOW(), NOW()),
(5, 'INR', '₹', 1, 0.76, 1, NOW(), NOW());

-- 28-06-2025
CREATE TABLE `cs_coupon_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=active 0=inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `cs_coupons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(250) NOT NULL,
  `discount_percent` decimal(11,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `usedQty` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `coupon_type_id` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=active 0=inactive',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- 29-06-2025
INSERT INTO `menus` (`id`, `name`, `parent_id`, `url`, `orders`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(56, 'Coupon Type', 10, 'madmin.coupon.type.list', 5, 'fas fa-angle-right', 'Active', '2025-06-28 11:42:27', '2025-06-28 11:42:27'),
(57, 'Coupon List', 55, 'madmin.coupon.list', 3, 'fas fa-angle-right', 'Active', '2025-06-28 11:43:24', '2025-06-28 11:43:24');

-- 30-06-2025
CREATE TABLE cs_states (
   id BIGINT PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(100),
   created_by INT(11) DEFAULT NULL,
   updated_by INT(11) DEFAULT NULL,
   created_at TIMESTAMP NULL DEFAULT NULL,
   updated_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE cs_cities (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    state_id BIGINT,
    name VARCHAR(100),
    created_by INT(11) DEFAULT NULL,
    updated_by INT(11) DEFAULT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE cs_shipping_zones (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    created_by INT(11) DEFAULT NULL,
    updated_by INT(11) DEFAULT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE cs_shipping_zone_locations (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    shipping_zone_id BIGINT,
    state_id BIGINT NULL,
    city_id BIGINT NULL,
    created_by INT(11) DEFAULT NULL,
    updated_by INT(11) DEFAULT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE cs_shipping_methods (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    shipping_zone_id BIGINT,
    name VARCHAR(100),
    base_fee DECIMAL(10,2),
    per_kg_fee DECIMAL(10,2),
    estimated_days VARCHAR(50),
    is_active TINYINT(1) DEFAULT 1 COMMENT '1=active 0=inactive',
    created_by INT(11) DEFAULT NULL,
    updated_by INT(11) DEFAULT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

INSERT INTO cs_states (id, name, created_by, created_at) VALUES
(1, 'Dhaka', 1, NOW()),
(2, 'Chattogram', 1, NOW()),
(3, 'Khulna', 1, NOW());


INSERT INTO cs_cities (id, state_id, name, created_by, created_at) VALUES
(1, 1, 'Dhaka City', 1, NOW()),
(2, 1, 'Narayanganj', 1, NOW()),
(3, 2, 'Chattogram City', 1, NOW()),
(4, 3, 'Khulna City', 1, NOW());


INSERT INTO cs_shipping_zones (id, name, description, created_by, created_at) VALUES
(1, 'Zone A', 'Covers Dhaka and nearby areas', 1, NOW()),
(2, 'Zone B', 'Covers Chattogram division', 1, NOW());

INSERT INTO cs_shipping_zone_locations (id, shipping_zone_id, state_id, city_id, created_by, created_at) VALUES
(1, 1, 1, NULL, 1, NOW()), -- Whole Dhaka state
(2, 1, NULL, 2, 1, NOW()), -- Specific city Narayanganj
(3, 2, 2, NULL, 1, NOW()); -- Whole Chattogram state

INSERT INTO cs_shipping_methods (id, shipping_zone_id, name, base_fee, per_kg_fee, estimated_days, is_active) VALUES
(1, 1, 'Standard Delivery', 50.00, 10.00, '2-3 Days', 1),
(2, 1, 'Express Delivery', 100.00, 15.00, '1 Day', 1),
(3, 2, 'Standard Delivery', 70.00, 12.00, '3-4 Days', 1);
