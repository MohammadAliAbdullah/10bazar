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
