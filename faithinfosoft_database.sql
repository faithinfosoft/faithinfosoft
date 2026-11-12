-- ============================================================
-- Faith Infosoft - MySQL Database Setup
-- Run this in phpMyAdmin or MySQL Workbench
-- ============================================================

-- Step 1: Create the database
CREATE DATABASE IF NOT EXISTS `faithinfosoft`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

-- Step 2: Use the database
USE `faithinfosoft`;

-- ============================================================
-- contacts table
-- ============================================================
CREATE TABLE IF NOT EXISTS `contacts` (
  `id`         INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(255) NOT NULL,
  `email`      VARCHAR(255) NOT NULL,
  `subject`    VARCHAR(255) NOT NULL,
  `message`    TEXT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ============================================================
-- admins table
-- ============================================================
CREATE TABLE IF NOT EXISTS `admins` (
  `id`         INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(255) NOT NULL,
  `email`      VARCHAR(255) NOT NULL,
  `password`   VARCHAR(255) NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Default admin: email = admin@faithinfosoft.com, password = admin123
INSERT INTO `admins` (`name`, `email`, `password`, `created_at`) VALUES
('Admin', 'admin@faithinfosoft.com', '$2y$10$.Pe61q/ZPzp.77I5JL8NVuOSaaR8UN/LVw95BMz/kk4QmZrGKeBe2', NOW())
ON DUPLICATE KEY UPDATE `name` = `name`;

-- ============================================================
-- careers table
-- ============================================================
CREATE TABLE IF NOT EXISTS `careers` (
  `id`         INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(255) NOT NULL,
  `address`    TEXT NULL,
  `email`      VARCHAR(255) NOT NULL,
  `position`   VARCHAR(255) NOT NULL,
  `mobile`     VARCHAR(20) NULL,
  `cv`         VARCHAR(500) NULL COMMENT 'Uploaded CV file path',
  `status`     ENUM('pending','reviewed','shortlisted','rejected') NOT NULL DEFAULT 'pending',
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ============================================================
-- admins table
-- ============================================================
CREATE TABLE IF NOT EXISTS `admins` (
  `id`         INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(255) NOT NULL,
  `email`      VARCHAR(255) NOT NULL,
  `password`   VARCHAR(255) NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Default admin: email = admin@faithinfosoft.com, password = admin123
INSERT INTO `admins` (`name`, `email`, `password`, `created_at`) VALUES
('Admin', 'admin@faithinfosoft.com', '$2y$10$.Pe61q/ZPzp.77I5JL8NVuOSaaR8UN/LVw95BMz/kk4QmZrGKeBe2', NOW())
ON DUPLICATE KEY UPDATE `name` = `name`;
