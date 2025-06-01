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
